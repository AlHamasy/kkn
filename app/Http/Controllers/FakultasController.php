<?php

namespace App\Http\Controllers;
use App\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
   
    public function index(Request $request){
        if($request->has('cari')){
            $fakultas = \App\fakultas::where('nama_fakultas','LIKE','%'.$request->cari.'%')->get();
        }else{
            $fakultas = \App\fakultas::all(); 
        }
        return view('fakultas.index',['fakultas' => $fakultas]);
    }
    
    public function form()
    {
       
        return view('fakultas.formfakultas');
    }

    public function create(Request $request)
    {     
        $this->validate($request,[
            'nama_fakultas' => 'required'
        ],[
            'nama_fakultas.required' => 'Masukkan Nama Fakultas'
        ]);
            
        Fakultas::create([
            'nama_fakultas' => $request->nama_fakultas
        ]);

        return redirect('fakultas')->with('Sukses','Data Disimpan');
    }

    public function edit($id)
    {
        $fakultas = \App\fakultas::find($id);
        return view('fakultas.editfakultas', compact('fakultas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_fakultas' => 'required'
        ],[
            'nama_fakultas.required' => 'Masukkan Nama Fakultas'
        ]);
        $fakultas = fakultas::find($id);
        $fakultas->update([
            'nama_fakultas' => $request->nama_fakultas
        ]);
        
        return redirect('fakultas')->with('sukses','Data Dihapus');
    }

    public function delete()
    {       
        $id = request()->delete_id;       
        $fakultas = Fakultas::find($id);
        $fakultas->delete();
        return redirect('fakultas');
    }
    
}
