<?php

namespace App\Http\Controllers;
use App\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $lokasi = \App\lokasi::where('kelurahan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $lokasi = \App\lokasi::all(); 
        }
        return view('lokasi.index',['lokasi' => $lokasi]);
    }

    public function form()
    {
        return view('lokasi.formlokasi');
    }
    
    public function create(Request $request)
    {     
        $this->validate($request,[
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required'

        ],[
            'provinsi.required' => 'Masukkan Provinsi',
            'kabupaten.required' => 'Masukkan Kabupaten',
            'kecamatan.required' => 'Masukkan Kecamatan',
            'kelurahan.required' => 'Masukkan Kelurahan'
        ]);
            
        Lokasi::create([
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan
        ]);

        return redirect('lokasi')->with('Sukses','Data Disimpan');
    }

    public function edit($id)
    {
        $lokasi = \App\lokasi::find($id);
        return view('lokasi.editlokasi', compact('lokasi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required'
        ],[
            'provinsi.required' => 'Masukkan Provinsi',
            'kabupaten.required' => 'Masukkan Kabupaten',
            'kecamatan.required' => 'Masukkan Kecamatan',
            'kelurahan.required' => 'Masukkan Kelurahan'
        ]);
        $lokasi = lokasi::find($id);
        $lokasi->update([
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan
        ]);
        
        return redirect('lokasi')->with('sukses','Data Dihapus');
    }

    public function delete()
    {       
        $id = request()->delete_id;       
        $lokasi = Lokasi::find($id);
        $lokasi->delete();
        return redirect('lokasi');
    }
}
