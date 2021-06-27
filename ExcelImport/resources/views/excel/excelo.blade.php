<!DOCTYPE html>
<html>
<head>
	<title>Sistem Input Nilai</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif

		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
			

		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/nilai/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">

							{{ csrf_field() }}

							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>


	<div class="container">
		<center>
			<h4>Data Nilai Mahasiswa</h4>
		</center>
		<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			IMPORT EXCEL
		</button>
		<a href="/nilai/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
		<button button onclick="window.location.href='/tambah-data';"type="button" class="btn btn-primary mr-5" data-target="#importExcel">
			TAMBAH DATA
		</button>
		<button button onclick="window.location.href='/halaman-utama';" type="button" class="btn btn-primary mr-5" data-target="#importExcel">
			HALAMAN UTAMA
		</button>
		<div class="container mt-3"> 
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>NAMA</th>
					<th>NIM</th>
					<th>UTS</th>
					<th>UAS</th>
					<th>REMIDIASI</th>
					<th>NILAI AKHIR</th>
				</tr>
			</thead>
			<tbody id="myTable">
				@php $i=1 @endphp
				@foreach($excel as $e)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$e->nama}}</td>
					<td>{{$e->nim}}</td>
					<td>{{$e->uts}}</td>
					<td>{{$e->uas}}</td>
					<td>{{$e->remidiasi}}</td>
					<td>{{$e->nilaiAkhir}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	</div>
		<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>