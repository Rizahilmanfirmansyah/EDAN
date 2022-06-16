@extends('pegawais.layout')

@section('content')

<body>
<div class="container">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 25rem;">
    <div class="card-header">
        PERIZINAN
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
    <form method="post" action="{{route('perizinan.store')}}" id="myform">
        @csrf
        <div class="form-group">
            <label for="nama">NAMA</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="awalcuti">AWAL IZIN</label>
            <input type="date" class="form-control" name="awalcuti">
        </div>
        <div class="form-group">
            <label for="akhircuti">AKHIR IZIN </label>
            <input type="date" class="form-control" name="akhircuti">
        </div>
        <div class="form-group">
            <label for="ket">KETERANGAN</label>
            <textarea name="ket" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{route('perizinan.index')}}" class="btn btn-primary">Kembali</a>
    </form>
    
</div>
</div>    
</div>
</div>
</body>
@endsection