<?php
	include 'app/db.php';

	if(session_status() == PHP_SESSION_NONE){
        session_start();
	}

	$query = "SELECT * FROM todos";

	$todos = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<title>Todo App</title>
	<style type="text/css">
		body {
			font-family: 'Montserrat', sans-serif;
			font-size: 14px;
		}

		*{
			box-sizing: border-box;
		}
	</style>
</head>
<body class="bg-blue-400">
	<div id="app" class="w-full px-2 md:w-1/2 md:px-0 mx-auto my-auto flex flex-col content-center h-screen">
		<section class="mt-4 text-center relative">
			<h1 class="text-white font-semibold text-2xl tracking-widest">My Task</h1>
			<?php if(isset($_SESSION['user'])): ?>
				<a style="top:3px;" class="text-white font-semibold text-lg absolute right-0" href="app/logout.php">Logout</a>
			<?php endif; ?>
		</section>
		<section class="text-center mt-3">
			<div class="inline-flex">
				<form style="display:inherit;" action="app/todo.php" method="POST">
					<input id="todo" name="todo" type="text" class="appearance-none focus:outline-none py-2 px-2 rounded rounded-tr-none rounded-br-none" placeholder="Nama Task" required>
					<?php if(isset($_SESSION['user'])): ?>
						<button id="add-btn" type="submit" class="bg-red-500 text-white px-5 rounded rounded-tl-none rounded-bl-none focus:outline-none hover:bg-red-700">Add</button>
					<?php else: ?>
						<a href="pages/login.php" class="bg-red-500 text-white px-5 py-2 rounded rounded-tl-none rounded-bl-none focus:outline-none hover:bg-red-700">
							<span>Add</span>	
						</a>
					<?php endif; ?>
				</form>
			</div>
		</section>
		<?php if(mysqli_num_rows($todos) > 0): ?>
			<section id="todos" class="mt-3">
				<?php while($todo = mysqli_fetch_assoc($todos)): ?>
					<div class="shadow bg-white rounded p-4 mt-4 ml-auto mr-auto md:w-1/2">
						<?php echo $todo['todo']; ?>
					</div>
				<?php endwhile; ?>
			</section>
		<?php endif; ?>
	</div>
</body>
</html>
<?php mysqli_close($conn); ?>