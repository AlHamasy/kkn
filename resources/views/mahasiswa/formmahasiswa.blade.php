@extends('layouts.layout')

@section('sidebar')

 <!-- Main Content -->
 <div id="content">       
        
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="clearfix"></div>
        <div class="col-md-12">

             
        <form method="POST" action="createmahasiswa" enctype="multipart/form-data" >
                {{csrf_field()}}
                  <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input name="nama_lengkap" class="form-control" id="nama_lengkap" type="text" placeholder="Nama Lengkap dan Gelar">
                    @error('nama_lengkap')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
                  <div class="form-group">
                                      <label for="nik">NIK</label>
                                      <input name="nik" class="form-control" id="nik" type="text" placeholder="Nomor Induk Mahasiswa">                 
                                      @error('nik')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  </div>

                  <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input name="tempat_lahir" class="form-control" id="tempat_lahir" type="text" placeholder="Tempat Lahir">
                    @error('tempat_lahir')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input name="tanggal_lahir" class="form-control" id="tanggal_lahir" type="date">
                    @error('tanggal_lahir')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

                  <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" id="jenis_kelamin" type="radio" name="jenis_kelamin" value="pria">Pria
                            <br>
                        <input class="form-check-input" id="jenis_kelamin" type="radio" name="jenis_kelamin" value="wanita">Wanita
                      </label>
                      @error('jenis_kelamin')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>

                      <div class="form-group">
                    <label for="no_hp">Nomor Handphone</label>
                    <input name="no_hp" class="form-control" id="no_hp" type="text" placeholder="Nomor Handphone">
                    @error('no_hp')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>       
                           
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" class="form-control" id="email" type="email" placeholder="Alamat Email">
                    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror                
                  
                  <div class="form-group">
                    <label for="prodi">Program Studi</label>
                    <select name="prodi" class="form-control" id="prodi">
                      <option selected disabled>--Pilih Program Studi--</option>
                      @foreach($prodi as $fk)
                        <option value='{{$fk->id}}'>{{$fk->nama_prodi}}</option>
                      @endforeach
                    </select>
                    @error('prodi')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 

                  <div class="form-group">
                    <label for="kelompok">Kelompok</label>
                    <select name="kelompok" class="form-control" id="kelompok">
                      <option selected disabled>--Pilih Kelompok--</option>
                      @foreach($kelompok as $fk)
                        <option value='{{$fk->id}}'>{{$fk->nama_kelompok}}</option>
                      @endforeach
                    </select>
                    @error('kelompok')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 

                  <div class="form-group">
                    <label for="thumbnail">Foto</label>
                    <input name="foto" class="form-control-file" id="thumbnail" type="file" aria-describedby="fileHelp">Max 2 Mb</small>
                  </div>
                    @error('foto')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror

                </form>
              </div>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
          </div>
        </div>
      </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>


@endsection


