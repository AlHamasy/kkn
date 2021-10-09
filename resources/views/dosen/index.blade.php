@extends('layouts.layout')

@section('sidebar')


 <!-- Main Content -->
 <div id="content">       
        
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
    <a href="formdosen" class="btn btn-sm btn-info">Tambah</a>
    </div>
    <form method="GET" action="dosen">
        <div class="col-md-12">
        <li class="app-search">
          <input name="cari" class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
            </div>
    </form>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                    <th><center>NIDN</th></center>
                    <th><center>Nama Lengkap</th></center>
                    <th><center>Tempat Lahir</th></center>
                    <th><center>Tanggal Lahir</th></center>
                    <th><center>Jenis Kelamin</th></center>
                    <th><center>No Hp</th></center>
                    <th><center>Email</th></center> 
                    <th><center>Program Studi</th></center>
                    <th><center>Pendidikan Terakhir</th></center>
                    <th><center>Foto</th></center>
                    <th><center>Aksi</th></center>
                  </tr>
                  @foreach($dosen as $dosen)
                </thead>
                <tbody>
                  <tr>
                    <td><center>{{$dosen->nidn}}</td></center>
                    <td><center>{{$dosen->nama_lengkap}}</td></center>
                    <td><center>{{$dosen->tempat_lahir}}</td></center>
                    <td><center>{{$dosen->tanggal_lahir}}</td></center>
                    <td><center>{{$dosen->jenis_kelamin}}</td></center>
                    <td><center>{{$dosen->no_hp}}</td></center>
                    <td><center>{{$dosen->email}}</td></center>
                    <td><center>{{$dosen->prodi->nama_prodi}}</td></center>
                    <td><center>{{$dosen->pendidikan_terakhir}}</td></center>
                    <td><center><img src="/images/{{$dosen->foto}}" height="50" width="50"></td></center>
                    <td>
                    <a href="{{ route('dosenedit', $dosen->id) }}" class="btn btn-warning" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="javascript:void(0)" onclick="showModalDelete({{$dosen->id}});" class="btn btn-danger" title="Hapus" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash"></i></a>                
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> 
        </button>
      </div>
      <div class="modal-body">
        <h3>Yakin Data Akan Dihapus?</h3>
        <form action="dosen/delete" method="POST">
          @csrf
          @method('post')
          <input type="hidden" id="delete_id" name="delete_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>   
</form>
</div>
</div>
</div>
   
      
      @endsection