<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h1>Daftar Dosen</h1>
			</div>
			<table class="table">
					<tr>
						<th>NO</th>
						<th>NAMA DOSEN</th>
						<th>MATAKULIAH</th>
						<th>KELAS</th>
						<th></th>
					</tr>

					<tr>
						@foreach($dosen as $d)
						<td>{{$d -> id}}</td>
						<td>{{$d -> nama}}</td>
						<td>{{$d -> matakuliah}}</td>
						<td>{{$d -> kelas}}</td>

						<td> <button onclick="window.location.href='/nilai';"type="button" class="btn btn-primary float-right">Lihat Data</button></td>

					</tr>
						@endforeach
			</table>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
