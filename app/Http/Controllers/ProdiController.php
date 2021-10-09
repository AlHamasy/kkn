<?php

namespace App\Http\Controllers;
use App\Prodi;
use App\Fakultas;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    
   public function index(Request $request){
        if($request->has('cari')){
            $prodi = \App\prodi::where('nama_prodi','LIKE','%'.$request->cari.'%')->get();
        }else{
            $prodi = prodi::all(); 
        }
        return view('prodi.index',['prodi' => $prodi]);
    }
    
    public function form()
    {
       $fakultas = Fakultas::all();
        return view('prodi.formprodi', compact(['fakultas']));
    }

    public function create(Request $request)
    {     
        $this->validate($request,[
            'nama_prodi' => 'required',
            'nama_fakultas' => 'required'
        ],[
            'nama_prodi.required' => 'Masukkan Nama Prodi',
            'nama_fakultas.required' => 'Masukkan Nama Fakultas'
        ]);
            
        Prodi::create([
            'nama_prodi' => $request->nama_prodi,
            'fakultas_id' => $request->nama_fakultas
        ]);

        return redirect('prodi');
    }

    public function edit($id)
    {
        $fakultas = Fakultas::all();
        $prodi = \App\prodi::find($id);
        return view('prodi.editprodi', compact('prodi','fakultas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_prodi' => 'required',
            'nama_fakultas' => 'required'
        ],[
            'nama_prodi.required' => 'Masukkan Nama Prodi',
            'nama_fakultas.required' => 'Masukkan Fakultas'
        ]);
        $prodi = prodi::find($id);
        $prodi->update([
            'nama_prodi' => $request->nama_prodi,
            'fakultas_id' => $request->nama_fakultas
        ]);
        
        return redirect('prodi');
    }

    public function delete()
    {
        $id = request()->delete_id;       
        $prodi = Prodi::find($id);
        $prodi->delete();
        return redirect('prodi');
    }
    
}
