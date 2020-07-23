<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Guardians | School</title>
</head>

<body>


	<h1>Data Wali</h1>

	<a href="/guardians/create">Tambah Data</a>

	<table border="1" style="width: 100%;">
		<thead>
			<tr>
				<th>Name</th>
				<th>NIK</th>
				<th>gender</th>
				<th>Phone</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Kandung</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			@foreach($guardians as $guardian)
			<tr>
				<td>{{ $guardian->name }}</td>
				<td>{{ $guardian->nik }}</td>
				<td>{{ ($guardian->gender == 'l') ? 'laki-laki' : 'perempuan' }}</td>
				<td>{{ $guardian->phone }}</td>
				<td>{{ $guardian->birth_date }}</td>
				<td>{{ $guardian->address }}</td>
				<td>{{ $guardian->is_parent ? 'Ya' : 'Tidak' }}</td>
				<td><a href="/guardians/edit">Edit </a><a href="/guardians/delete"> Delete</a></td>
			</tr>
			@endforeach
		</tbody>

	</table>

</body>

</html>