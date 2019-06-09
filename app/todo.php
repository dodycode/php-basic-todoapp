<?php
include 'db.php';

if(isset($_POST['todo'])){
    $todo = $_POST['todo'];

    $query = "INSERT INTO todos(todo) values('$todo');";

    $execute = mysqli_query($conn, $query);

    if($execute){
        echo "
            <script type='text/javascript'>
                alert('Todo successfully created!');

                window.location.href = '/index.php';
            </script>
        ";
    }
}else{
    echo "
        <script type='text/javascript'>
            alert('Please fill todo name!');

            window.location.href = '/index.php';
        </script>
    ";
}

mysqli_close($conn);