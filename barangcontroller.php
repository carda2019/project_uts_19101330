<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class BarangController extends Controller
{
    
    public function index() {
        
       // $barang = DB::table('tb_barang')->insert([
        //  [
        //      'mouse'     => 'macam-macam mouse',
        //      'keyboard'   => 'Komputer,komputer,tv',
        //      'flasdisk'   => 'macam macam flasdisk',
        //      
        //  ]
        // ]);

        $barang = DB::table('tb_barang')->get();

        return view('halaman/barang', compact('barang'));
    }
}
