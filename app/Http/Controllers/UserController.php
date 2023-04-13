<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user()
    {
        $user = DB::table('users')->get();
        return view('user/data',['users' => $user]);
    }

    public function tambah()
    {
        return view('user/tambah');
    }

    public function hapus($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('/user')->with('errors', 'Delete Berhasil!');
    }
}
