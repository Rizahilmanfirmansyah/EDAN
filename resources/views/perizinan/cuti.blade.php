@extends('pegawais.layout')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  
<link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
   


    <div class="container">
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
            <a href="{{route('perizinan.create')}}" class="btn btn-success">Tambah Perizinan</a>
        <br><br>
        <table id="data" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>AWAL IZIN</th>
                    <th>AKHIR IZIN</th>
                    <th>KETERANGAN</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            
                @php
               //  $nomor = 1 + (($perizinansip->currentPage()-1) * $perizinansip->perPage());
             @endphp
                 @foreach($perizinansip as $key => $p)
                 <tr id="side{{$p->id}}">
                     <td>{{$key+1}}</td>
                     <td>{{$p->nama}}</td>
                     <td>{{$p->awalcuti}}</td>
                     <td>{{$p->akhircuti}}</td>
                     <td>{{$p->ket}}</td>
                     <td>
                        <form action="{{route('perizinan.destroy',$p->id)}}" method="post">

                            
                            <a href="{{route('perizinan.edit',$p->id)}}" class="btn btn-success bi bi-pencil-fill"></a>
                            @csrf
                            @method('DELETE')
                            <a href="javascript:void(0)" onclick="destroy({{ $p->id }})"  class="btn btn-danger bi bi-trash-fill"></a>
                        </form>
                     </td>
                    </tr>
            
                @endforeach
            
        </table>
   
    <script>
      $(document).ready( function(){
        $('#data').DataTable();
      });


        function destroy($id)
        {
            if(confirm('Hapus?'))
            {
                $.ajax({
                url:'/del/'+id,
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
    </script>
     </div>
    @endsection
    
    
    
    
    
   