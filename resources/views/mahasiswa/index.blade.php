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
    
    <div class="card-header py-3">
    <a href="formmahasiswa" class="btn btn-sm btn-info">Tambah</a>
    </div>
    <form method="GET" action="mahasiswa">
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
                    <th><center>NIK</th></center>
                    <th><center>Nama Lengkap</th></center>
                    <th><center>Tempat Lahir</th></center>
                    <th><center>Tanggal Lahir</th></center>
                    <th><center>Jenis Kelamin</th></center>
                    <th><center>No Hp</th></center>
                    <th><center>Email</th></center> 
                    <th><center>Program Studi</th></center>
                    <th><center>Kelompok</th></center>
                    <th><center>Foto</th></center>
                    <th><center>Aksi</th></center>
                  </tr>
                  @foreach($mahasiswa as $mahasiswa)
                </thead>
                <tbody>
                  <tr>
                    <td><center>{{$mahasiswa->nik}}</td></center>
                    <td><center>{{$mahasiswa->nama_lengkap}}</td></center>
                    <td><center>{{$mahasiswa->tempat_lahir}}</td></center>
                    <td><center>{{$mahasiswa->tanggal_lahir}}</td></center>
                    <td><center>{{$mahasiswa->jenis_kelamin}}</td></center>
                    <td><center>{{$mahasiswa->no_hp}}</td></center>
                    <td><center>{{$mahasiswa->email}}</td></center>
                    <td><center>{{$mahasiswa->prodi->nama_prodi}}</td></center>
                    <td><center>{{$mahasiswa->kelompok->nama_kelompok}}</td></center>
                    <td><center><img src="/images/{{$mahasiswa->foto}}" height="50" width="50"</td></center>
                    <td>
                    <a href="{{ route('mahasiswaedit', $mahasiswa->id) }}" class="btn btn-warning" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="javascript:void(0)" onclick="showModalDelete({{$mahasiswa->id}});" class="btn btn-danger" title="Hapus" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash"></i></a>                
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
        <form action="mahasiswa/delete" method="POST">
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