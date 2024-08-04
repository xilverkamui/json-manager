let jsonData = {};

function loadJson() {
    fetch('json_handler.php?action=read')
        .then(response => response.json())
        .then(data => {
            jsonData = data;
            renderJson(data);
        });
}

function renderJson(data) {
    const container = $('#jsonContainer');
    container.empty();
    Object.entries(data).forEach(([key, value]) => {
        container.append(`
            <div class="row-item list-group-item">
                <i class="handle fa fa-bars fa-lg"></i>
                <div class="form-group">
                    <label>Key</label>
                    <input type="text" class="form-control key-input" value="${key}">
                </div>
                <div class="form-group">
                    <label>Value</label>
                    <input type="text" class="form-control value-input" value="${value}">
                </div>
            </div>
        `);
    });

    container.sortable({
        handle: '.handle',
        update: function(event, ui) {
            updateJsonOrder();
        }
    });
}

function updateJsonOrder() {
    const updatedData = {};
    $('#jsonContainer .row-item').each(function() {
        const key = $(this).find('.key-input').val();
        const value = $(this).find('.value-input').val();
        updatedData[key] = value;
    });
    jsonData = updatedData;
}

function saveJson() {
    updateJsonOrder();
    fetch('json_handler.php?action=update', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(jsonData),
    })
    .then(response => response.text())
    .then(message => {
        $('#message').text(message);
        setTimeout(() => { $('#message').text(''); }, 3000);
    });
}

document.addEventListener('DOMContentLoaded', loadJson);
