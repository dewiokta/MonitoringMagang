@extends('masterp')

@section('konten')
<style type="text/css">
div.hello{
    text-align: center;
}

form.example input[type=text] {
  padding: 8px;
  font-size: 17px;
  border: 1px;
  float: left;
  width: 80%;
  background: #ffffff;
}

form.example button {
  float: left;
  width: 20%;
  padding: 7px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}
</style>



<div class="container">
<br><br>
    <div class="row">
        <div class="col-md-12">
<div class="hello">
<h2>Data Mahasiswa Magang</h2>
</div>
<br>
<form class="example" action="/action_page.php" style="margin:auto;max-width:700px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

</div></div>
</div>

@endsection