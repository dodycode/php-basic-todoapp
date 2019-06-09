<?php
include 'db.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users where `username` = '$username' AND `password` = '$password'";

$users = mysqli_query($conn, $query);

if(mysqli_num_rows($users) > 0){
    //user valid

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $_SESSION['user'] = $username;

    echo "
        <script type='text/javascript'>
            alert('Successfully logged in!');

            window.location.href = '/index.php';
        </script>
    ";
}else{
    echo "
        <script type='text/javascript'>
            alert('You have entered an invalid username or password');

            window.location.href = '/pages/login.php';
        </script>
    ";
}

mysqli_close($conn);