<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['user'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Login Page - Todo App</title>
</head>

<body class="h-screen flex justify-center items-center bg-blue-400">
    <div class="w-full max-w-xs px-2 lg:px-0">
        <form action="../app/login.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
            <h1 class="text-center text-3xl text-gray-700 font-light mb-6 tracking-wider">TodoApp</h1>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="x x x x x x" required>
            </div>
            <div class="flex">
                <button class="shadow bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">
                    Sign In
                </button>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2019 Dodycode. For practice purposes.
        </p>
    </div>
</body>

</html>