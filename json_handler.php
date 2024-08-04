<?php
$file = 'config.json';

switch ($_GET['action']) {
    case 'read':
        if (file_exists($file)) {
            $json = file_get_contents($file);
            echo $json;
        } else {
            echo json_encode([]);
        }
        break;

    case 'update':
        $json = file_get_contents('php://input');
        if (json_decode($json) === null) {
            echo 'Invalid JSON';
        } else {
            file_put_contents($file, $json);
            echo 'JSON data saved successfully.';
        }
        break;

    default:
        echo 'Invalid action.';
        break;
}
?>
