@extends('pegawais.layout')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="row justify-content-center align-items-center">
<div class="card" style="width: 25rem;">
    <div class="card-header">
        OK
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
            <input type="text" class="form-control" value="{{$perizinan->nama}}" name="nama">
        </div>
        <div class="form-group">
            <label for="awalcuti">AWAL IZIN</label>
            <input type="date" class="form-control" value="{{$perizinan->awalcuti}}" name="awalcuti">
        </div>
        <div class="form-group">
            <label for="akhircuti">AKHIR IZIN</label>
            <input type="date" class="form-control" value="{{$perizinan->akhircuti}}" name="akhircuti">
        </div>
        <div class="form-group">
            <label for="ket">KETERANGAN</label>
            <textarea name="ket" class="form-control" value="{{$perizinan->ket}}">{{$perizinan->ket}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{route('perizinan.index')}}" class="btn btn-primary">Kembali</a>
    </form>
<br>
</div>
</div>    
@endsection