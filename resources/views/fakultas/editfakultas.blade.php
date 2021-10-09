@extends('layouts.layout')

@section('sidebar')

 <!-- Main Content -->
 <div id="content">       
        
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Fakultas</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="clearfix"></div>
        <div class="col-md-12">

             
        <form method="POST" action="{{ route('update', $fakultas->id) }}" >
                {{csrf_field()}}
                  <div class="form-group">
                    <label for="nama_fakultas">Nama Fakultas</label>
                    <input name="nama_fakultas" class="form-control" id="nama_fakultas" type="text" placeholder="Nama Fakultas" value="{{$fakultas->nama_fakultas}}">
                  @error('nama_fakultas')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
          </div>
        </div>
      </div>
     </form>
     </form>
    </main>

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


