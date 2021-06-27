<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<table class="table">
		<form action="/nilai" method="POST">
			       	@csrf
			<div class="form-group">
			<label for="exampleInputPassword1">No</label>
			<input name="id" type="text" class="form-control" id="exampleInputPassword1" placeholder="No" value="{{$excel -> max('id')+1}}" readonly=" ">
			</div>
				<div class="form-group">
				    <label for="exampleFormControlSelect1">Nama Mahasiswa</label>
				    <input name="nama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama Mahasiswa">
				</div>
				<div class="form-group">
				    <label for="exampleFormControlSelect1">NIM</label>
				    <input name="nim" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan NIM">
				</div>
			<div class="form-group">
				    <label for="exampleFormControlSelect1">UTS</label>
				      <input name="uts" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nilai UTS">
				</div>
			<div class="form-group">
				    <label for="exampleFormControlSelect1">UAS</label>
				      <input name="uas" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nilai UAS"></div>

			<div class="form-group">
				    <label for="exampleFormControlSelect1">Remidiasi</label>
				      <input name="remidiasi" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nilai Remidiasi">
				  </div>
				   <div class="form-group">
				    <label for="exampleFormControlSelect1">Nilai Akhir</label>
				      <input name="nilaiAkhir" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nilai Akhir">
				  </div>
				     <div class="modal-footer">
			        <button type="submit" class="btn btn-primary">Simpan data</button>


				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</table>
</body>
</html>