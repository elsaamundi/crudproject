@extends('dashboard')
@section('judul', 'Tampil Printer')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<title>Data Printer</title>
</head>
<body>
<h2>Data Printer</h2>
<a href="/printer/tambah" class="btn btn-primary"> + Tambah Printer Baru</a>
<br />
<br />
<table class="table table-hover">
<thead>
<tr>
<th scope="col">ID Printer</th>
<th scope="col">Nama Printer</th>
<th scope="col">Spesifikasi Printer</th>
<th scope="col">Harga Printer</th>
<th scope="col">Opsi</th>

</tr>
</thead>
<tbody>
@foreach ($printer as $p)
<tr>
<th scope="row">{{$p->idPrinter}}</th>
<td> {{$p->namaPrinter}} </td>
<td> {{$p->SpesifikasiPrinter}} </td>
<td>Rp. {{$p->HargaPrinter}} </td>
<td>
<a href="/printer/edit/{{ $p->idPrinter }}" class="btn btn-success">Edit</a>
|
<a href="/printer/hapus/{{ $p->idPrinter }}" onclick="return confirm('Yakin Hapus {{ $p->idPrinter }} ?')" class="btn btn-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>
@endsection
