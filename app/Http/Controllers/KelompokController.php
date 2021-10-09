<?php

namespace App\Http\Controllers;
use App\Kelompok;
use App\Dosen;
use App\Lokasi;

use Illuminate\Http\Request;

class KelompokController extends Controller
{
    
    public function index(Request $request){
        
        if($request->has('cari')){
            $kelompok = \App\kelompok::where('nama_kelompok','LIKE','%'.$request->cari.'%')->get();
        }else{
            $kelompok = kelompok::all(); 
        }
        return view('kelompok.index',['kelompok' => $kelompok]);
    }

    public function form()
    {
        $dosen = Dosen::all();
        $lokasi = Lokasi::all();
        return view('kelompok.formkelompok', compact(['dosen','lokasi']));
    }

    public function create(Request $request)
    {
         $this->validate($request,[
            'nama_kelompok' => 'required',
            'dosen' => 'required',
            'lokasi' => 'required'
        ],[
            'nama_kelompok.required' => 'Masukkan Nama Kelompok',
            'dosen.required' => 'Masukkan Nama Dosen',
            'lokasi.required' => 'Masukkan Lokasi Kegiatan KKN'
        ]);

        Kelompok::create([
            'nama_kelompok' => $request->nama_kelompok,
            'dosen_id' => $request->dosen,
            'lokasi_id' => $request->lokasi
        ]);
        
        return redirect('kelompok');
    }

    public function delete()
    {
        $id = request()->delete_id;       
        $kelompok = Kelompok::find($id);
        $kelompok->delete();
        return redirect('kelompok');
    }

    public function edit($id)
    {
        $kelompok = Kelompok::find($id);
        $dosen = Dosen::all();
        $lokasi = Lokasi::all();
        return view('kelompok.editkelompok', compact('kelompok', 'dosen', 'lokasi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_kelompok' => 'required',
            'dosen' => 'required',
            'lokasi' => 'required'
        ],[
            'nama_kelompok.required' => 'Masukkan Nama Kelompok',
            'dosen.required' => 'Pilih Nama Dosen',
            'lokasi.required' => 'Pilih Nama Lokasi'
        ]);

        $kelompok = Kelompok::find($id);
        $kelompok->update([
            'nama_kelompok' => $request->nama_kelompok,
            'dosen_id' => $request->dosen,
            'lokasi_id' => $request->lokasi
        ]);
        
        return redirect('kelompok');
    }

}
