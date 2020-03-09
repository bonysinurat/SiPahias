@extends('layouts.app')

@include('header')

<h3 style="margin-bottom:40px; font-weight:bold; margin-left: 15%;">Jemput</h3>

<div class="btn-group btn-group-toggle" data-toggle="buttons" >
  <label class="btn btn-secondary active" style="width:700px; border-radius:0;" >
    <input  type="radio" name="options" id="option1" autocomplete="off" checked> Isi Form
  </label>
  <label class="btn "style="width:700px; border-radius:0; background-color:#F4F6F3">
    <input  type="radio" name="options" id="option2" autocomplete="off"> Status
  </label>
  
</div>

<div  style="margin-left: 30%; margin-top:40px;">
<form >

<div class="row">
<div  class="form-group row" class="">
<label for="inputPassword" class=" col-form-label">Jenis Sampah</label>
    <div style="margin-left:20px;">
    <select class="form-control" id="">
      <option>Plastik</option>
      <option>Botol Plastik</option>
      <option>Botol Kaca</option>
      <option>Sampah Elektronik</option>
      <option>Besi</option>
      <option>Alumunium</option>
      <option>Kertas/Karton</option>
    </select>
    </div>
  </div>


  <div class="form-group row" class="col-sm-2" style="margin-left:5%;">Berat</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id=""  style="width:50px;" >
    </div>
  </div>


  <div class="form-group row" class="col-sm-3" style="margin-left:5%;">Satuan</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id=""  style="width:50px;">
    </div>
  </div>

  </div>

  <div class="form-group row"  >Tanggal/Waktu</label>
    <div class="col-sm-4">
      <input class="date form-control" type="text" >
    </div>
  </div>

  

  <script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>  

  <div class="form-group row"  >Lokasi Penjemputan</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id=""  style="" >
    </div>
  </div>
  
</form>

</div>

<div style="float:right; margin-right:27%; margin-top:5%;">
<button type="button" class="btn btn-danger" style="margin-right:20px;">Batal</button>
<button type="button" class="btn btn-success">Ok</button>
</div>




@include('footer')
