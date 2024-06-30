@extends('dashboard')
@section('judul', 'Tambah Transaksi')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<title>Tambah Transaksi</title>
</head>
<body>
<h3>Tambah Transaksi</h3>
<a href="/transaksi" class="btn btn-primary"> Kembali</a>
<br />
<br />
<form action="/transaksi/storetambah" method="post">
{{ csrf_field() }}
Kode Transaksi : <br>

<input class="form-control form-control-sm" type="text" name="idtr" required="required"> <br />
Jumlah : <br>
<input class="form-control form-control-sm" type="text" name="jumlah" required="required"> <br />
ID Printer : <br>
<select class="form-control form-control-sm" name="idprinter" id="">
@foreach ($printer as $p)
<option value="{{ $p->idPrinter }}">{{ $p->namaPrinter }}</option>
@endforeach
</select><br />
ID User : <br>
<select class="form-control form-control-sm" name="iduser" id="">
@foreach ($user as $u)
<option value="{{ $u->id }}">{{ $u->name }}</option>
@endforeach
</select><br />
<br>
<input type="submit" value="Simpan Data" class="btn btn-info">
</form>
</body>
</html>
@endsection