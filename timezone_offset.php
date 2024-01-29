<?php

$error = null;
if (!isset($_GET['timezone']) || !$_GET['timezone']) {
    $error = 'Timezone not found';
}elseif (!isset($_GET['date']) || !$_GET['date']) {
    $error = 'Date not found';
}

header('Content-Type: application/json; charset=utf-8');

if (!$error) {
    date_default_timezone_set($_GET['timezone']);
    $offset = date_offset_get(new DateTime(date('Y-m-d H:i', $_GET['date'])));
    echo json_encode(['offset' => $offset]);
}else {
    echo json_encode(['error' => $error]);
}
