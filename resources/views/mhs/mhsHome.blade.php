@extends('master')

@section('konten')

<style type="text/css">
div.hello{
    text-align: center;
}
</style>



<div class="container">
<br><br><br><br><br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-12">
<div class="hello">
<h2>Hello Jaya, Welcome Back</h2>

<script type='text/javascript'>
window.setTimeout("hari()",0)
function hari(){
 var namah = new Array("Sunday", "Monday", "Tuesday ", "Wednesday ", "Thursday ", "Friday ", "Saturday");
 var namab = new Array("January", "Februariy", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Desember");
 var tanggal = new Date();
 setTimeout("hari()",0);
 document.getElementById("dino").innerHTML =namah[tanggal.getDay()]+", "+tanggal.getDate()+" "+namab[tanggal.getMonth()]+" "+tanggal.getFullYear();
}
</script>
<div style="color : black;font-size: 12pt" id='dino'></div>

</div>
</div></div>
</div>



@endsection