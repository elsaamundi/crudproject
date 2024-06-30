<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransaksiCon extends Controller
{
    public function index(){
        $transaksi = DB::table('tbtransaksi')->join('users', 'users.id', '=', 'tbtransaksi.idUser')->join('tbprinter', 'tbprinter.idPrinter', '=', 'tbtransaksi.idPrinter')->get();
        return view('tampiltransaksi', ['transaksi' => $transaksi]);
        
        
    }
    public function tambah()

{
$user = DB::table('users')->get();
$printer = DB::table('tbprinter')->get();
return view('tambahtransaksi', ['user' => $user], ['printer' => $printer]);
}
public function store(Request $request)
{
DB::table('tbtransaksi')->insert([
'idTransaksi' => $request->idtr,
'Jumlah' => $request->jumlah,
'idPrinter' => $request->idprinter,
'idUser' => $request->iduser
]);
return redirect('/transaksi');
}
public function edit($idtr)
{
$transaksi = DB::table('tbtransaksi')->where('idTransaksi', $idtr)->get();
return view('edittransaksi', ['transaksi' => $transaksi]);
}
public function storeupdate(Request $request)
{
DB::table('tbtransaksi')->where('idTransaksi', $request->idtr)->update([
'Jumlah' => $request->jumlah,
'idPrinter' => $request->idprinter,
'idUser' => $request->iduser
]);
return redirect('/transaksi');
}
public function hapus($idtr)
{
DB::table('tbtransaksi')->where('idTransaksi', $idtr)->delete();
return redirect('/transaksi');
}
}


