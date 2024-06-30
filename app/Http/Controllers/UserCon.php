<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserCon extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('tampiluser', ['users' => $users]);
    }
    public function hapus($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/users');
    }
}
