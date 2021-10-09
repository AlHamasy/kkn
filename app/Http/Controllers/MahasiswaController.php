<?php

namespace App\Http\Controllers;
use App\Mahasiswa;
use App\Prodi;
use App\Kelompok;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $mahasiswa = \App\mahasiswa::where('nama_lengkap','LIKE','%'.$request->cari.'%')->get();
        }else{
            $mahasiswa = mahasiswa::all(); 
        }
        return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);
    }

    public function form()
    { 
        $prodi = Prodi::all();
        $kelompok = Kelompok::all();
        return view('mahasiswa.formmahasiswa', compact(['prodi','kelompok']));
    } 
    
    public function create(Request $request)
    {     
        $this->validate($request,[
            'nama_lengkap' => 'required',
            'nik' => 'required|max:11',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required',
            'prodi' => 'required',
            'kelompok' => 'required',
            'foto' => 'required'

        ],[
            'nama_lengkap.required' => 'Masukkan  Nama Lengkap',
            'nik.required' => 'Masukkan Nama NIK',
            'tempat_lahir.required' => 'Masukkan Tempat Lahir',
            'tanggal_lahir.required' => 'Masukkan Tanggal Lahir',
            'jenis_kelamin.required' => 'Masukkan Jenis Kelamin',
            'no_hp.required' => 'Masukkan No Handphone',
            'email.required' => 'Masukkan Email',
            'prodi.required' => 'Masukkan Nama Prodi',
            'kelompok.required' => 'Masukkan Nama Kelompok',
            'foto.required' => 'Masukkan Foto'
        ]);
           
           $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
           $request->foto->move(public_path('images'), $imgName); 

        Mahasiswa::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'prodi_id' => $request->prodi,
            'kelompok_id' => $request->kelompok,
            'foto' => $imgName,
            'role_id' => 2
        ]);

        return redirect('mahasiswa');
    }
    
    public function edit($id)
    {
        $prodi = Prodi::all();
        $kelompok = Kelompok::all();
        $mahasiswa = \App\Mahasiswa::find($id);
        return view('mahasiswa.editmahasiswa', compact('mahasiswa','prodi','kelompok'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_lengkap' => 'required',
            'nik' => 'required|max:11',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required',
            'prodi' => 'required',
            'kelompok' => 'required',
            'foto' => 'required'
        ],[
            'nama_lengkap.required' => 'Masukkan Nama Lengkap',
            'nik.required' => 'Masukkan Nama NIK',
            'tempat_lahir.required' => 'Masukkan Tempat Lahir',
            'tanggal_lahir.required' => 'Masukkan Tanggal Lahir',
            'jenis_kelamin.required' => 'Masukkan Jenis Kelamin',
            'no_hp.required' => 'Masukkan No Handphone',
            'email.required' => 'Masukkan Email',
            'prodi.required' => 'Masukkan Nama Prodi',
             'kelompok.required' => 'Masukkan Nama Kelompok',
            'foto.required' => 'Masukkan Foto'
        ]);

        if($request->foto){
        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('images'), $imgName);
        }
        
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->update([
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'prodi_id' => $request->prodi,
            'kelompok_id' => $request->kelompok,
            'foto' => $imgName
        ]);
        
        return redirect('mahasiswa');
    }     

    public function delete()
    {
        $id = request()->delete_id;       
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('mahasiswa');
    }
}

