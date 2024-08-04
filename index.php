<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>JSON Manager</title>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">JSON Manager</h2>
    <form id="jsonForm">
        <div class="form-group">
            <label for="jsonInput">JSON Data</label>
            <div id="jsonContainer" class="list-group"></div>
        </div>
        <button type="button" class="btn btn-primary mt-3" onclick="saveJson()">Save</button>
    </form>
    <div id="message" class="mt-3"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.1/jquery-ui.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
