<!DOCTYPE html>
<html>
<head>
	<title>Proyek 2</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
 
				<h3>Data Mahasiswa</h3>
 
				<div class="form-group">
					
				</div>
				
				<br/>
 
				<a class ="btn btn-primary ml-3" href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru</a>
				
				<br/>
				<br/>
			 
				<table class="table table-bordered">
					<tr>
						<th>Nim</th>
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Semester</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					@foreach($mahasiswa as $p)
					<tr>
						<td>{{ $p->mahasiswa_nim }}</td>
						<td>{{ $p->mahasiswa_nama }}</td>
						<td>{{ $p->mahasiswa_jurusan }}</td>
						<td>{{ $p->mahasiswa_semester }}</td>
						<td>{{ $p->mahasiswa_alamat }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/mahasiswa/edit/{{ $p->mahasiswa_id }}">Edit</a>
										
							<a class="btn btn-danger btn-sm" href="/mahasiswa/hapus/{{ $p->mahasiswa_id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

			</div>
		</div>
	</div>
 
 
</body>
</html>