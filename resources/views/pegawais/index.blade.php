
@extends('pegawais.layout')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  
<link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">


<style>
    .freeze-table{
        border-spacing: 0ch;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 14px;
        padding: 0;
        border: 1px solid #ccc;
    }
    thead th{
        top: 0;
        background-color: white;
        color: #fff;
        z-index: 20;
        min-height: 30px;
        height: 30px;
        text-align: center;
    }
    tr:nth-child(even){
        background-color: #f2f2f2;
           
    }

    th, td{
        padding: 0;
        outline: 1px solid #ccc;
        border: none;
        outline-offset: -1px;
        padding-left: 30px;
        width: 140px;
        
    }
    tr{
        min-height: 25px;
        height: 25px;
    }
    .col-id-no{
        left: 0;
        position: sticky;
    }
    .col-first-name{
        left: 80px;
        position: sticky;
    }
    .fixed-header{
        z-index: 50;
    }
    tr:nth-child(even) td[scope=row]{
        background-color: #f2f2f2;
    }
    tr:nth-child(odd) td[scope=row]{
        background-color: white;
    }
    .table-container{
        width: 500px;
        height: 300px;
        overflow: scroll;
    }

    </style>

   <style>

     .freeze-table{
        border-spacing: 0ch;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 14px;
        padding: 0;
        border: 1px solid #ccc;
     }
     tr th {
        top: 0;
        
        position: sticky;
        color: #fff;
        z-index: 20;
        min-height: 30px;
        height: 30px;
        text-align: center;
        white-space: nowrap;
        text-align: center;
        background-color: white;
        color: black;
    
    }

    tr td {
       white-space: nowrap;
       text-align: center;
    }

    .kolum{
       position: sticky;
       left: 0px;
       width: 140px;
       background-color: aliceblue;
       white-space: nowrap;

    }
    .second-column {
       position: sticky;
       left: 380px;
       width: 140px;
       background-color: aliceblue;
       white-space: nowrap;
    }
   .first-column {
       position: sticky;
       left: 196px;
       width: 140px;
       background-color: aliceblue;
       white-space: nowrap;
    }
  .third-column {
       position: sticky;
       left: 60px;
       width: 140px;
       background-color: aliceblue;
       white-space: nowrap;
    }
   .fourth-column {
       position: sticky;
       left: 6px;
       width: 140px;
       background-color: aliceblue;
       white-space: nowrap;
    }

   .first-column.header {
       background-color: aliceblue;
    }
   
     </style>

       <div class="container">
        <div class="row">       
       <div class="col-md-12">
       <div>
       @if ($message = Session::get('success'))
       <div class="alert alert-success " role="alert">
           <strong><p>{{ $message }}</p></strong>
           <div class="text-end">
           <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
           </div>
         </div>
       @endif
       </div>
     <!-- <a href="{{route('pegawais.create')}}" class="btn btn-success">Tambah Pegawai</a>-->
       <!--<div style="overflow: scroll;">-->
    <!--<div class="table-responsive">-->
       <table id="datasip" class="table  table-bordered table-striped table-light text-center">
        <thead>    
            <tr class="">
                <th class="" >NO</th>
                <th class="" >FOTO</th>
                <th class="" >NAMA</th>
                <th class="" >JABATAN</th>
                <th class="" >JENIS KELAMIN</th>
                <th class="" >NO KTP</th>
                <th class="" >NPWP</th>
                <th class="" >NO BPJS KAS</th>
                <th class="" >NO KARTU KELUARGA</th>
                <th class="" >TEMPAT LAHIR</th>
                <th class="" >TANGGAL LAHIR</th>
                <th class="" >ALAMAT KTP</th>
                <th class="" >DOMISILI</th>
                <th class="" >GAJI</th>
                <th class="" >TANGGAL GAJI</th>
                <th class="" >NO REK</th>
                <th class="" >BANK</th>
                <th class="" >EMAIL</th>
                <th class="" >NO HP</th>
                <th class="" >STATUS</th>
                <th class="" >TANGGUNGAN</th>
                <th class="" >AWAL MASA KERJA</th>
                <th class="" >TANGGAL MASUK</th>
                <th class="" >BERAKHIR</th>
                <th class="" >PENGHARGAAN</th>
                <th class="" >ACTION</th>
            </tr>
            
        </thead>
        @php
            $nomor = 1 + (($pegawais->currentPage()-1) * $pegawais->perPage());
        @endphp
            @foreach ($pegawais as $pegawai)
            <tr id="side{{$pegawai->id}}"> 
                <td class="table-info">{{$nomor++}}</td>
                <td class="table-info"><img width="120px" src="{{ asset('/data_file/'.$pegawai->foto)}}"> </td>
                <td class="table-info">{{ $pegawai->nama }}</td>
                <td class="table-info">{{ $pegawai->jabatan_id}}</td>
                <td class="">{{ $pegawai->jk }}</td>
                <td class="">{{ $pegawai->noktp }}</td>
                <td class="">{{ $pegawai->npwp}}</td>
                <td class="">{{ $pegawai->nobpjs }}</td>
                <td class="">{{ $pegawai->nokk }}</td>
                <td class="">{{ $pegawai->tempatlahir}}</td>
                <td class="">{{ $pegawai->ttl }}</td>
                <td class="">{{ $pegawai->alamatktp}}</td>
                <td class="">{{ $pegawai->domisili}}</td>
                <td class="">{{ $pegawai->gaji }} </td>
                <td class="">{{ $pegawai->tanggalgaji }}</td>
                <td class="">{{ $pegawai->norek}}</td>
                <td class="">{{ $pegawai->bankfungsi->banksip}}</td>
                <td class="">{{ $pegawai->email}}</td>
                <td class="">{{ $pegawai->nohp }}</td>
                <td class="">{{ $pegawai->status}}</td>
                <td class="">{{ $pegawai->tanggungan}}</td>
                <td class="">{{ $pegawai->awalmasuk}}</td>
                <td class="">{{ $pegawai->tanggalmasuk}}</td>
                <td class="">{{ $pegawai->berakhir }}</td>
                <td>
               <ul style="text-align: left;">
                    @foreach($pegawai->penghargaanfungsi as $p)
                    <li>{{$p->penghargaansip}}</li>
                    @endforeach
                </ul>
                </td>

                <td class="">
                    <form action="{{ route('pegawais.destroy',$pegawai->id) }}" method="POST">
    
                        <a class="btn btn-success bi bi-person-fill" href="{{ route('pegawais.show',$pegawai->id)}}"></a>

                        <a class="btn btn-primary bi bi-pencil-fill"  href="{{ route('pegawais.edit',$pegawai->id) }}"></a>       
                        @csrf
                        @method('DELETE')
                       <!--<button type="submit" onclick="return confirm('sure?')" class="btn btn-danger glyphicon glyphicon-trash"></button>-->
                       <a href="javascript:void(0)" onclick="destroy({{ $pegawai->id }})"  class="btn btn-danger bi bi-trash-fill"></a>

                    </form>
                </td>
            </tr>
            @endforeach 
        </table>
        <div class="d-flex justify-content-end">
        {{ $pegawais->links()}}
        </div>
    </div>
        
   
    <script>
      $(document).ready(function() {
        var table = $('#datasip').DataTable( {
        scrollY:        "500px",
        scrollX:        true,
        bAutoWidth:     false, 
        scrollCollapse: true,
        paging:         true,
        fixedColumns:   {
            left: 4,
            right: 0
        }
    });
});
   // delete
   function destroy(id)
    {
        if(confirm("apakah yakin mau dihapus"))
        {
            $.ajax({
                url:'/delete/'+id,
                type:'DELETE',
                data:{
                    _token : $("input[name=_token]").val()
                },
                success:function(response)
                {
                    $("#side"+id).remove();
                }
            });
        }
    }

   // $('#submit').click(function(){
  //$(this).addClass('button_loader').attr("value","");
  //window.setTimeout(function(){
    //$('#submit').removeClass('button_loader').attr("value","\u2713");
    //$('#submit').prop('disabled', true);
  //}, 2);
 //});
    </script>
</div>
</div>
</div>
</div>
</div>
@endsection






        
 