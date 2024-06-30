@extends('dashboard')
@section('judul', 'Edit Printer')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
25
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<title>Edit Printer</title>
</head>
<body>
<h3>Edit Printer</h3>
<a href="/printer" class="btn btn-primary"> Kembali</a>
<br />
<br />
@foreach($printer as $p)
<form action="/printer/update" method="post">
{{ csrf_field() }}
Kode Printer: <br>
<input class="form-control form-control-sm" type="text" readonly name="id" value="{{ $p->idPrinter 
}}"> <br />
Nama Printer: <br>
<input class="form-control form-control-sm" type="text" required="required" name="nama" value="{{ 
$p->namaPrinter }}"> <br />
Spesifikasi Printer : <br>
<textarea class="form-control form-control-sm" required="required" name="spek" cols="30" rows="5">{{ 
$p->SpesifikasiPrinter }}</textarea> <br />
Harga Printer : <br>
Rp. <input class="form-control form-control-sm" type="number" required="required" name="harga" 
value="{{ $p->HargaPrinter }}"> <br /><br>
<input type="submit" value="Simpan Data" class="btn btn-info">
</form>
@endforeach
</body>
</html>
@endsection
