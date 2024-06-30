@extends('dashboard')
@section('judul', 'Tambah Printer')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<title>Tambah Printer</title>
</head>
<body>
<h3>Tambah Printer</h3>
<a href="/printer" class="btn btn-primary"> Kembali</a>
<br />
<br />
<form action="/printer/storetambah" method="post">
{{ csrf_field() }}
Kode Printer : <br>
<input class="form-control form-control-sm" type="text" name="kode" required="required"> <br />
Nama Printer : <br>
<input class="form-control form-control-sm" type="text" name="nama" required="required"> <br />
Spesifikasi Printer : <br>
<textarea class="form-control form-control-sm" name="spek" required="required" cols="30" 
rows="5"></textarea> <br />
23
Harga Printer : <br>
Rp. <input class="form-control form-control-sm" type="number" name="harga" required="required"><br 
/>
<br>
<input type="submit" value="Simpan Data" class="btn btn-info">
</form>
</body>
</html>
@endsection