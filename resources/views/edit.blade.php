<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
 
				<h3>Edit Data Mahasiswa</h3>
			 
				<a class="btn btn-danger btn-sm" href="/mahasiswa"> Kembali</a>
				
				<br/>
				<br/>
			 
				@foreach($mahasiswa as $p)
				<form action="/mahasiswa/update" method="post" class="form-horizontal">
					{{ csrf_field() }}
					<input class="form-control" type="hidden" name="id" value="{{ $p->mahasiswa_id }}"> <br/>
					NIM <input class="form-control" type="text" required="required" name="nim" value="{{ $p->mahasiswa_nim }}"> <br/>
					Nama <input class="form-control" type="text" required="required" name="nama" value="{{ $p->mahasiswa_nama }}"> <br/>
					Jurusan <input class="form-control" type="text" required="required" name="jurusan" value="{{ $p->mahasiswa_jurusan }}"> <br/>
					Semester <input class="form-control" type="number" required="required" name="semester" value="{{ $p->mahasiswa_semester }}"> <br/>
					Alamat <textarea class="form-control" required="required" name="alamat">{{ $p->mahasiswa_alamat }}</textarea> <br/>
					<input class="btn btn-primary ml-3" type="submit" value="Simpan Data">
				</form>
				@endforeach

			</div>
		</div>
	</div>
		
 
</body>
</html>