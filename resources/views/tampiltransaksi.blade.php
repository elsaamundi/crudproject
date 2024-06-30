@extends('dashboard')
@section('judul', 'Tampil Transaksi')
@section('konten')
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<title>Data Transaksi</title>
</head>
<body>
<h2>Data Transaksi</h2>
<a href="/transaksi/tambah" class="btn btn-primary"> + Tambah Transaksi Baru</a>
<br />
<br />
<table class="table table-hover">
<thead>
<tr>
<th scope="col">ID Transaksi</th>
<th scope="col">Jumlah</th>
<th scope="col">Printer</th>
<th scope="col">User</th>
<th scope="col">Opsi</th>
</tr>
</thead>
<tbody>
@foreach ($transaksi as $p)
<tr>
<th scope="row">{{$p->idTransaksi}}</th>
<td> {{$p->Jumlah}} </td>
<td> {{$p->namaPrinter}} </td>
<td> {{$p->name}} </td>
<td>
<a href="/transaksi/edit/{{ $p->idTransaksi }}" class="btn btn-success">Edit</a>
|
<a href="/transaksi/hapus/{{ $p->idTransaksi }}" onclick="return confirm('Yakin Hapus {{ $p->idTransaksi }} ?')" class="btn btn-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>
@endsection