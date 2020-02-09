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
				<h3>Data Pegawai</h3>
				<a href="/pegawai"> Kembali</a>

				<br/>
				{{-- menampilkan error validasi --}}
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<br/>

				<form action="/pegawai/doAdd" method="post">
					{{ csrf_field() }}
					Nama <input type="text" name="nama" required="required"> <br/>
					Jabatan <input type="text" name="jabatan" required="required"> <br/>
					Umur <input type="number" name="umur" required="required"> <br/>
					Alamat <textarea name="alamat" required="required"></textarea> <br/>
					<input class="btn btn-primary" type="submit" value="Simpan Data">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
