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
				<a href="/pegawai/add"> + Tambah Pegawai Baru</a>

				<br/><br/>

				<div class="form-group">
					<form action="/pegawai/search" method="GET" class="form-inline">
						<input class="form-inline" type="text" name="search" placeholder="Cari Pegawai .." value="{{ old('search') }}">
						<input class="btn btn-primary" type="submit" value="CARI">
					</form>
				</div>

				<table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					@foreach($pegawai as $p)
					<tr>
						<td>{{ $p->pegawai_nama }}</td>
						<td>{{ $p->pegawai_jabatan }}</td>
						<td>{{ $p->pegawai_umur }}</td>
						<td>{{ $p->pegawai_alamat }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/pegawai/delete/{{ $p->pegawai_id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>
				{{ $pegawai->links() }}
			</div>
		</div>
	</div>
</body>
</html>
