@extends('layouts.layout')

@section('sidebar')

 <!-- Main Content -->
 <div id="content">       
        
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Data Kelompok KKN</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="clearfix"></div>
        <div class="col-md-12">

        <form method="POST" action="{{ route('kelompokupdate', $kelompok->id) }}" >
                {{csrf_field()}}                 
                  
                  <div class="form-group">
                    <label for="nama_kelompok">Nama Kelompok</label>
                    <input name="nama_kelompok" class="form-control" id="nama_kelompok" type="text" placeholder="Nama Kelompok" value="{{$kelompok->nama_kelompok}}">
                    @error('nama_kelompok')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror  
                  </div>
                  
                  <div class="form-group">
                    <label for="dosen">Dosen Pembimbing Lapangan</label>
                    <select name="dosen" class="form-control" id="dosen">
                      <option selected disabled>--Pilih Dosen--</option>
                      @foreach($dosen as $fk)
                        <option value='{{$fk->id}}' <?php if($kelompok->dosen_id == $fk->id ) echo "selected"; ?> >{{$fk->nama_lengkap}}</option>
                      @endforeach
                    </select>
                    @error('dosen')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror  
                  </div>

                  <div class="form-group">
                    <label for="lokasi">Lokasi KKN</label>
                    <select name="lokasi" class="form-control" id="lokasi">
                      <option selected disabled>--Pilih Lokasi KKN--</option>
                      @foreach($lokasi as $fk)
                        <option value='{{$fk->id}}' <?php if($kelompok->lokasi_id == $fk->id ) echo "selected"; ?> >{{$fk->kelurahan}}</option>
                      @endforeach
                    </select>
                    @error('lokasi')
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