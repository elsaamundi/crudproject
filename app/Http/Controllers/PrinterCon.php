<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PrinterCon extends Controller
{
    public function index()
{
$printer = DB::table('tbprinter')->get();
return view('tampilprinter', ['printer' => $printer]);
}
public function tambah()
{
return view('tambahprinter');
}
public function store(Request $request)
{
DB::table('tbprinter')->insert([
'idPrinter' => $request->kode,
'namaPrinter' => $request->nama,
'SpesifikasiPrinter' => $request->spek,
'HargaPrinter' => $request->harga
]);
return redirect('/printer');
}
public function edit($id)
{
$printer = DB::table('tbprinter')->where('idPrinter', $id)->get();
return view('editprinter', ['printer' => $printer]);
}
public function storeupdate(Request $request)
{
DB::table('tbprinter')->where('idPrinter', $request->id)->update([
'namaPrinter' => $request->nama,
'SpesifikasiPrinter' => $request->spek,
'HargaPrinter' => $request->harga
]);
return redirect('/printer');
}
public function hapus($id)
{
DB::table('tbprinter')->where('idPrinter', $id)->delete();
return redirect('/printer');
}

}
