<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Article | MyBlog</title>
</head>

<body>

	<h1>Create Your Article</h1>

	<form action="/article/store" method="post">
		@csrf
		<table>
			<tr>
				<td>
					Masukkan Judul Artikel :
				</td>
				<td>
					<input type="text" name="title">
				</td>
			</tr>
			<tr>
				<td>
					Penulis :
				</td>
				<td>
					<input type="text" name="author">
				</td>
			</tr>
			<tr>
				<td>
					Your Article :
				</td>
				<td>
					<textarea name="content" id="" cols="30" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					Category Article :
				</td>
				<td>
					<input type="text" name="category">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>

</body>

</html>