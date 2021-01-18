<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Заметки</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" href="css/main.css">
		@livewireStyles
	</head>
	<body>
		<div class="container">
			<div class="row py-5">
				<div class="col-6 offset-3 text-center">
					<h1 class="display-4">Заметки</h1>
					<p class="lead text-muted fs-5">
						LAMP + Laravel + LiveWire + Bootstrap<br>
						<small>
							Реализованно в качестве тестового задания &laquo;Классическое CRUD приложение&raquo;.
						</small>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-6 offset-3">
					@livewire('notes')
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		@livewireScripts
	</body>
</html>
