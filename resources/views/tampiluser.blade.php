
@extends('dashboard')
@section('judul', 'Tampil User')
@section('konten')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Printer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        
        <div class="mt-3">
            
        </div>
        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Data User
            </div>
            <div class="card-body">
                <!-- Button trigger modal -->
                <a <a href="/users/tambah" type="button" type="button"   class="btn btn-success mb-3">
                + Tambah Data Baru
                </a>

                <!--tabel-->
                <table class ="table table-bordered table-striped table-hover">
                    <tr>
                    <th>ID USER</th>
                    <th>NAMA </th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>CREATED AT</th>
                    <th>OPSI</th>
                    </tr>
                    @foreach($users as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->email}}</td>
                        <td>{{$p->password}}</td>
                        <td>{{$p->created_at}}</td>
                        <td>
                
                         <a onclick="return confirm('Yakin Ingin Menghapus Data ini?')"href="/users/hapus/{{$p->id}}" class="btn btn-danger" >Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <!-- tambah data-->
            </div>
        </div>
    </div>
    
   
    <br>
    <br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
@endsection