@extends('dashboard')
@section('judul', 'Edit Transaksi')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<title>Edit Transaksi</title>
</head>
<body>
<h3>Edit Transaksi</h3>
<a href="/transaksi" class="btn btn-primary"> Kembali</a>
<br />
<br />
@foreach($transaksi as $t)
<form action="/transaksi/update" method="post">
{{ csrf_field() }}
Kode Transaksi: <br>
<input class="form-control form-control-sm" type="text" readonly name="idtr" value="{{ $t->idTransaksi }}"> <br />
Jumlah: <br>
<input class="form-control form-control-sm" type="text" required="required" name="jumlah" value="{{ $t->Jumlah }}"> <br />
ID Printer : <br>
<input class="form-control form-control-sm" type="text" required="required" name="idprinter"
value="{{ $t->idPrinter }}"> <br /><br />
ID User : <br>
<input class="form-control form-control-sm" type="text" required="required" name="iduser" value="{{ $t->idUser }}"> <br /><br /><br>
<input type="submit" value="Simpan Data" class="btn btn-info">
</form>
@endforeach
</body>
</html>
@endsection
