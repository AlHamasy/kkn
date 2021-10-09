@extends('layouts.layout')

@section('sidebar')


 <!-- Main Content -->
 <div id="content">       
        
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Program Lokasi KKN</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="clearfix"></div>
        <div class="col-md-12">

             
                <form method="POST" action="{{ route('lokasiupdate', $lokasi->id) }}" >
                {{csrf_field()}}
                  <div class="form-group">
                    <label for="provinsi">Nama Provinsi</label>
                    <input name="provinsi" class="form-control" id="provinsi" type="text" placeholder="Nama Provinsi" value="{{$lokasi->provinsi}}">
                    @error('provinsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror  
                  </div>

                  <div class="form-group">
                    <label for="kabupaten">Nama Kabupaten/Kota</label>
                    <input name="kabupaten" class="form-control" id="kabupaten" type="text" placeholder="Nama Kabupaten/Kota" value="{{$lokasi->kabupaten}}">
                    @error('kabupaten')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror  
                  </div>

                  <div class="form-group">
                    <label for="kecamatan">Nama Kecamatan</label>
                    <input name="kecamatan" class="form-control" id="kecamatan" type="text" placeholder="Nama Kecamatan" value="{{$lokasi->kecamatan}}">
                    @error('kecamatan')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror  
                  </div>

                  <div class="form-group">
                    <label for="kelurahan">Nama Kelurahan/Desa</label>
                    <input name="kelurahan" class="form-control" id="kelurahan" type="text" placeholder="Nama Kelurahan/Desa" value="{{$lokasi->kelurahan}}">
                    @error('desa')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror  
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


