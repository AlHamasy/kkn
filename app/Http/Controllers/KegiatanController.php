<?php

namespace App\Http\Controllers;
use App\Kelompok;
use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $kegiatan = \App\kegiatan::where('nama_kegiatan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $kegiatan = kegiatan::all(); 
        }
        return view('kegiatan.index',['kegiatan' => $kegiatan]);
    }

    public function form()
    {
        $kelompok = Kelompok::all();
        return view('kegiatan.formkegiatan', compact(['kelompok']));
    }

    public function create(Request $request)
    {     
        $this->validate($request,[
            'nama_kelompok' => 'required',
            'nama_kegiatan' => 'required'
        ],[
            'nama_kelompok.required' => 'Masukkan Nama Kelompok',
            'nama_kegiatan.required' => 'Masukkan Nama Kegiatan'
        ]);
            
        Kegiatan::create([
            'kelompok_id' => $request->nama_kelompok,
            'nama_kegiatan' => $request->nama_kegiatan
        ]);

        return redirect('kegiatan');
    }

    public function edit($id)
    {
        $kelompok = Kelompok::all();
        $kegiatan = \App\kegiatan::find($id);
        return view('kegiatan.editkegiatan', compact('kegiatan','kelompok'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_kelompok' => 'required',
            'nama_kegiatan' => 'required'
        ],[
            'nama_kelompok.required' => 'Masukkan Nama Kelompok',
            'nama_kegiatan.required' => 'Masukkan Nama Kegiatan'
        ]);
        $kegiatan = kegiatan::find($id);
        $kegiatan->update([
            'kelompok_id' => $request->nama_kelompok,
            'nama_kegiatan' => $request->nama_kegiatan
        ]);
        
        return redirect('kegiatan');
    }

    public function delete()
    {
        $id = request()->delete_id;       
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect('kegiatan');
    }

}
