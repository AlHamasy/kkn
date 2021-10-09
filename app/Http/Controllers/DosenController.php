<?php

namespace App\Http\Controllers;
use App\Dosen;
use App\Prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{

	public function index(Request $request){
        if($request->has('cari')){
            $dosen = \App\dosen::where('nama_lengkap','LIKE','%'.$request->cari.'%')->get();
        }else{
            $dosen = dosen::all(); 
        }
        return view('dosen.index',['dosen' => $dosen]);
    }

    public function form()
    { 
        $prodi = Prodi::all();
        return view('dosen.formdosen', compact(['prodi']));
       
    } 
    
public function create(Request $request)
    {            
        $this->validate($request,[
            'nidn' => 'required|max:11',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required',
            'prodi' => 'required',
            'pendidikan_terakhir' => 'required',
            'foto' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ],[
            'nidn.required' => 'Masukkan Nama Prodi',
            'nama_lengkap.required' => 'Masukkan Nama Nama Lengkap',
            'tempat_lahir.required' => 'Masukkan Tempat Lahir',
            'tanggal_lahir.required' => 'Masukkan Tanggal Lahir',
            'jenis_kelamin.required' => 'Masukkan Jenis Kelamin',
            'no_hp.required' => 'Masukkan No Handphone',
            'email.required' => 'Masukkan Email',
            'prodi.required' => 'Masukkan Nama Prodi',
            'pendidikan_terakhir.required' => 'Masukkan Pendidikan Terakhir',
            'foto.required' => 'Masukkan Foto'
        ]);
        
        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('images'), $imgName);  
        
        Dosen::create([
            'nidn' => $request->nidn,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'prodi_id' => $request->prodi,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'foto' => $imgName,
            'role_id' => 1,
        ]);
          
        return redirect('dosen');
    }
    
    public function edit($id)
    {
        $prodi = Prodi::all();
        $dosen = \App\dosen::find($id);
        return view('dosen.editdosen', compact('dosen','prodi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nidn' => 'required|max:11',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required',
            'prodi' => 'required',
            'pendidikan_terakhir' => 'required',
            'foto' => 'required|max:2048'
        ],[
            'nidn.required' => 'Masukkan Nama Prodi',
            'nama_lengkap.required' => 'Masukkan Nama Nama Lengkap',
            'tempat_lahir.required' => 'Masukkan Tempat Lahir',
            'tanggal_lahir.required' => 'Masukkan Tanggal Lahir',
            'jenis_kelamin.required' => 'Masukkan Jenis Kelamin',
            'no_hp.required' => 'Masukkan No Handphone',
            'email.required' => 'Masukkan Email',
            'prodi.required' => 'Masukkan Nama Prodi',
            'pendidikan_terakhir.required' => 'Masukkan Pendidikan Terakhir',
            'foto.required' => 'Masukkan Foto'
        ]);
        
        if($request->foto){
        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('images'), $imgName);
        }

        $dosen = dosen::find($id);
        $dosen->update([
            'nidn' => $request->nidn,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'prodi_id' => $request->prodi,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'foto' => $imgName
        ]);      
        
        return redirect('dosen');
    }     

    public function delete()
    {
        $id = request()->delete_id;       
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('dosen');
    }
}
