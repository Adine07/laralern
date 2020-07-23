<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Article | MyBlog</title>
</head>

<body>


	<h1>List Article</h1>

	<a href="/article/create">Tambah Article</a>

	<table border="1" style="width: 80%; margin:auto">
		<thead>
			<tr>
				<th>Title</th>
				<th>Author</th>
				<th>Content</th>
				<th>Category</th>
				<th>Created_at</th>
			</tr>
		</thead>

		<tbody>
			@foreach($articles as $article)
			<tr>
				<td>{{ $article->title }}</td>
				<td>{{ $article->author }}</td>
				<td>{{ $article->content }}</td>
				<td>{{ $article->category }}</td>
				<td>{{ $article->created_at }}</td>
			</tr>
			@endforeach
		</tbody>

	</table>

</body>

</html>