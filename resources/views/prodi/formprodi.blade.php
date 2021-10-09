@extends('layouts.layout')

@section('sidebar')

 <!-- Main Content -->
 <div id="content">       
        
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Program Studi</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="clearfix"></div>
        <div class="col-md-12">

             
        <form method="POST" action="createprodi" >
                {{csrf_field()}}
                  <div class="form-group">
                    <label for="nama_prodi">Nama Program Studi</label>
                    <input name="nama_prodi" class="form-control" id="nama_prodi" type="text" placeholder="Nama Prodi">
                    @error('nama_prodi')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror  
                  </div>
                  
                  <div class="form-group">
                    <label for="nama_fakultas">Nama Fakultas</label>
                    <select name="nama_fakultas" class="form-control" id="nama_fakultas">
                      <option selected disabled>--Pilih Fakultas--</option>
                      @foreach($fakultas as $fk)
                        <option value='{{$fk->id}}'>{{$fk->nama_fakultas}}</option>
                      @endforeach
                    </select>
                    @error('nama_fakultas')
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


