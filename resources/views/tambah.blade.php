<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
 
				<h3>Tambah Data Mahasiswa</h3>
			 
				<a class="btn btn-danger btn-sm" href="/mahasiswa"> Kembali</a>
				
				<br/>
				<br/>
			 
				<form action="/mahasiswa/store" method="post" class="form-horizontal">
					{{ csrf_field() }}
					<p>NIM <input class="form-control" type="number" name="nim" required="required"> </p>
					<p>Nama <input class="form-control" type="text" name="nama" required="required"> </p>
					<p>Jurusan <input class="form-control" type="text" name="jurusan" required="required"> </p>
					<p>Semester <input class="form-control" type="number" name="semester" required="required"> </p>
					<p>Alamat <textarea class="form-control" name="alamat" required="required"></textarea> </p>
					<input class="btn btn-primary ml-3" type="submit" value="Simpan Data">
				</form>

			</div>
		</div>
	</div>
 
</body>
</html>