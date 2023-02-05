<?php

namespace App\Http\Controllers;


use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $infomatika_find = Prodi::find(1);
        $si_find = Prodi::find(2);
        return view('prodi.index', compact('infomatika_find', 'si_find'));
    }
}
