<?php
include 'db.php';

$username = 'bobo';
$password = md5('tester123');

//create table users
$query = "create table users(
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    username varchar(255) NOT NULL,
    password text NOT NULL
);";

$execute = mysqli_query($conn, $query);

//create table todo
$query = "create table todos(
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    todo varchar(255) NOT NULL
);";

$execute = mysqli_query($conn, $query);

//insert data
$query = "insert into users(username,password) values('$username','$password');";

$execute = mysqli_query($conn, $query);

if($execute){
    echo "
        <script type='text/javascript'>
            alert('Table successfully created and seeded!');

            window.location.href = '/';
        </script>
    ";
}