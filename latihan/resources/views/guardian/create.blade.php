<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		h1 {
			text-align: center;
		}

		table {
			width: 80%;
			margin: auto;
		}
	</style>
	<title>Create | School</title>
</head>

<body>

	<h1>Input Guardian data</h1>


	<table border="1">
		<form action="/guardians/store" method="post">
			@csrf
			<tr>
				<td>Name:</td>
				<td colspan="2"><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>NIK:</td>
				<td colspan="2"><input type="number" name="nik"></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td><input type="radio" value="l" name="gender"> Laki-laki</td>
				<td><input type="radio" value="p" name="gender"> Perempuan</td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input type="number" name="phone"></td>
			</tr>
			<tr>
				<td>Birth Date</td>
				<td><input type="date" name="birth_date"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="address" id="" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td>Biological Parent?</td>
				<td><input type="radio" value="1" name="is_parent">Yes</td>
				<td><input type="radio" value="0" name="is_parent">No</td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="Input Data"></td>
			</tr>
		</form>
	</table>

</body>

</html>