<?php

namespace App\Http\Controllers;
use App\Dosen;
use App\Fakultas;
use App\Prodi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    
    public function index()
    {
        $dosen=Dosen::count();
        $fakultas=Fakultas::count();
        $prodi=Prodi::count();
        return view('home', compact(['dosen','fakultas','prodi']));
    }
}