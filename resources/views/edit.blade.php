<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap/bootstrap.css') }}">
</head>

<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h2 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
				<a href="/pegawai"><h3>Data Pegawai</h3></a>
				<a href="/pegawai"> Kembali</a>

				<br/><br/>

				@foreach($pegawai as $p)
				<form action="/pegawai/doEdit" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
					Nama<input class="form-inline" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
					Jabatan<input class="form-inline" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
					Umur<input class="form-inline" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
					Alamat<textarea class="form-inline" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
					<input class="btn btn-primary" type="submit" value="Simpan Data">
				</form>
				@endforeach
			</div>
		</div>
	</div>
</body>
</html>
