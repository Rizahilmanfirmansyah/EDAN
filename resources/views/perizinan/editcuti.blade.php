@extends('pegawais.layout')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  
<link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

<div class="row justify-content-center align-items-center">
<div class="card" style="width: 25rem;">
    <div class="card-header">
        EDIT PERIZINAN
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Waduh!</strong>Kesalahan input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{route('perizinan.update',$perizinan->id)}}" id="myform">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">NAMA</label>
            <select name="nama" class="form-select" >
                <option value="{{$perizinan->nama}}">{{$perizinan->nama}}</option>
                @foreach ($pegawais as $item)
                <option value="{{$item->nama}}">{{$item->nama}}</option>
                    
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label for="ket">KETERANGAN</label>
            <select class="form-select" name="ket">
                <option value="{{$perizinan->ket}}">{{$perizinan->ket}}</option>
                <option value="Izin">Izin</option>
                <option value="Sakit">Sakit</option>
                <option value="Alpha">Alpha</option>
                <option value="Cuti">Cuti</option>
            </select>
        </div>
        <div class="form-group">
            <label for="awalcuti">AWAL IZIN</label>
            <input type="date" class="form-control" value="{{$perizinan->awalcuti}}" name="awalcuti">
        </div>
        <div class="form-group">
            <label for="akhircuti">AKHIR IZIN</label>
            <input type="date" class="form-control" value="{{$perizinan->akhircuti}}" name="akhircuti">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{route('perizinan.index')}}" class="btn btn-primary">Kembali</a> 
    </form>
<br>
</div>
</div>    
@endsection