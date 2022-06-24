@extends('pegawais.layout')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  
<link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>

<script src="{{ asset('admin/dist/js/adminlte.min.js')}}"></script>


<h1 style="text-align: center;">INPUT DATA PEGAWAI</h1>
<br>
<div class="row container text-center justify-content-center">
<div class="small-box bg-success" style="width: 20rem;">
    <div class="inner">
    <h3>{{$jumlah}}</h3>
    <p>Jumlah Pegawai</p>
    </div>
    <div class="icon">
    <!--<i class="bi bi-person-plus-fill"></i>-->
    </div>
    <a href="{{route('pegawais.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    &nbsp; &nbsp;
    <div class="small-box bg-warning" style="width: 20rem;">
        <div class="inner">
        <h3>{{$izin}}</h3>
        <p>Jumlah Perizinan</p>
        </div>
        <div class="icon">
        <!--<i class="bi bi-person-plus-fill"></i>-->
        </div>
        <a href="{{route('perizinan.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
</div>

<!--
<div class="card justify-content-center" style="width: 24rem">
    <div class="card-header">
        Data Pegawai
    </div>
    <div class="container text-start">
    <br>
    <p>Input data pegawai ini digunakan untuk memasukan data pegawai dan menyimpan data yang telah dimasukan.</p>
    <p>Fitur yang digunakan terdiri dari :</p>
    <ol type="1">
        <li>Tambah Pegawai</li>
        <li>Edit Pegawai</li>
        <li>Detail Pegawai</li>
        <li>Hapus Pegawai</li>
    </ol>
</div>
</div>
-->
</center>
@endsection