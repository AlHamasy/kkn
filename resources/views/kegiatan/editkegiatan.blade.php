@extends('layouts.layout')

@section('sidebar')

 <!-- Main Content -->
 <div id="content">       
        
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Kegiatan Kelompok KKN</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="clearfix"></div>
        <div class="col-md-12">

        <form method="POST" action="{{ route('kegiatanupdate', $kegiatan->id) }}" >
                {{csrf_field()}}                 
                  <div class="form-group">
                    <label for="nama_kelompok">Nama Kelompok KKN</label>

                    <select name="nama_kelompok" class="form-control" id="nama_kelompok">
                      <option selected disabled>--Pilih Kelompok--</option>
                      @foreach($kelompok as $fk)
                        <option value='{{$fk->id}}' <?php if($kegiatan->kelompok_id == $fk->id ) echo "selected"; ?> > {{$fk->nama_kelompok}} </option>
                      @endforeach
                    </select>

                    @error('nama_kelompok')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror  
                  </div>

                  <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input name="nama_kegiatan" class="form-control" id="nama_kegiatan" type="text" placeholder="Nama Kegiatan" value="{{$kegiatan->nama_kegiatan}}">
                    @error('nama_kegiatan')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror  
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


