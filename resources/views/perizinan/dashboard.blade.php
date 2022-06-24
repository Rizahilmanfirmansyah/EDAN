@extends('pegawais.layout')


@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  
<link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">


<div class="container" style="width: 50%">
<table class="table table-bordered text-center">
   <thead>
    <tr>
        <th>JUMLAH PERIZINAN
        </th>
    </tr>
  </thead>
    @foreach ($totalnya as $total)
    @endforeach
      <tr>
      <td>
        {{$totalnya}}
      </td>
      </tr>
</table>
</div>
<!--<a href="{{route('perizinan.index')}}" class="bi bi-backspace-fill "></a>  -->



<?php
//$kata   = explode(" ", $teks_clean);
//$hasil  = count($kata);
//$data   = array_count_values($kata);

//echo "<b>Teks</b> <br> $teks";
//echo "<hr>";
//echo "<b>Teks clean</b> <br> $teks_clean";
//echo "<hr>";
//echo "Jumlah Kata: $hasil buah kata";
//echo "<hr>";

//foreach($data as $x => $x_value) {
  //  echo $x." : ".$x_value;
    //echo "<br>";
//}
//echo "<hr>";
?>

    
@endsection