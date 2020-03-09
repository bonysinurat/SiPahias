@extends('layouts.app')

@include('header')

<!--edit.blade-->
<div class="row" style="margin-left: 15%;">

<div class="col-sm-9" >
<h3 style="margin-bottom:40px; font-weight:bold;">Akun Profil</h3>

<form>
<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword"  >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">No. Telp</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">No. ID</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Kata Sandi</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" id="inputPassword" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" id="inputPassword" >
    </div>
  </div>
</form>

<div style="float:right; margin-right:25%;">
<button type="button" class="btn btn-danger" style="margin-right:20px;">Batal</button>
<button type="button" class="btn btn-success">Ok</button>
</div>

</div>

<div class="col-sm-3" style="margin-left: 0;">
<img src ="{{ ('ikon/foto.jpg') }}" style="width:200px">
<button type="button" class="btn btn-dark" style="margin-left:60px; margin-top:10px;">pilih File</button>

</div>

</div>

@include('footer')
