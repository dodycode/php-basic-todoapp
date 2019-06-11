<?php
include 'db.php';

var_dump($_POST['id']);

if (isset($_POST['todo']) && isset($_POST['id'])) {
    $todo = $_POST['todo'];
    $id = $_POST['id'];

    $query = "UPDATE todos SET todo = '$todo' where id = $id";

    $execute = mysqli_query($conn, $query);

    if ($execute) {
        $response = [
            success => true
        ];

        echo json_encode($response);
    }
} else {
    $response = [
        success => false
    ];

    echo json_encode($response);
}

mysqli_close($conn);
