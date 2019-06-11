<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM todos where id = $id";

    $exec = mysqli_query($conn, $query);

    if ($exec) {
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
