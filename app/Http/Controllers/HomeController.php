<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Data Pohon Buah";
        $data['pohonbuah'] = array(
            'kode' => '001',
            'nama' => 'Pohon Durian'
        );
        return view('admin.dashboard', compact('title', 'data'));
    }
    public function chart()
    {
        $title = "Data chart";

        return view('admin.chart', compact('title'));
    }
}
