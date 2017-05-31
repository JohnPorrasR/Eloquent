<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Many to many</title>
</head>
<body>
	<h1>Mucho</h1>
	<ul>
		@foreach($users as $user)
		<li><strong>Autor: </strong>
			{{ $user->name }}
			<ul>
				@foreach($user->books as $book)
					<li>{{ $book->title }}</li>
				@endforeach
			</ul>
		</li>
		@endforeach
	</ul>
</body>
</html>