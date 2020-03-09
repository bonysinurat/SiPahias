@extends('layouts.app')

<div class = "jumbotron" style="background-color:#51ABA4; height: 123px;">

<!-- <div class="row">
<div style="margin-bottom:50px;">
<a href="index.php"><img src ="{{ ('ikon/Untitled-10.png') }}" style ="width : 100px; "></a>
  </div>-->
<div> 

<ul class="nav justify-content-end" >
  <li class="nav-item">
    <a class="nav-link active" href="#">Tukar Sampah</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a  class="nav-link" href="#">Tentang</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">Poin</a>
  </li>
  <li class="nav-item">
    <img src="{{ ('ikon/user.png') }}" style ="width : 30px; height:30px; margin-top:5px;" >  
  </li>
</ul>
</div>

</div>
</div>


<!--isi tukar poin-->
<!-- <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="{{ ('ikon/full-trash-container.png') }}" alt="Produk" style="width:50px; height:50px;">
                    
                <div class="caption">
                 
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="foto/biskuit.jpg" alt="Produk">
                  <div class="caption">
                    <h3>Sari Gandum</h3>
                    <h5>5</h5>
                    <p>Rp. 50.000</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="foto/biskuit.jpg" alt="Produk">
                  <div class="caption">
                    <h3>Sari Gandum</h3>
                    <h5>5</h5>
                    <p>Rp. 50.000</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="foto/biskuit.jpg" alt="Produk">
                  <div class="caption">
                    <h3>Sari Gandum</h3>
                    <h5>5</h5>
                    <p>Rp. 50.000</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                  </div>
                </div>
              </div>

          </div> -->

          <div class="row" style="margin-left:5%;">

          <div class="card col-sm-3" style="width: 300px;">
            <img class="card-img-top" src="{{ ('ikon/full-trash-container.png') }}"   alt="Card image cap">
            
            <div class="card-body" style="background-color:grey; height:50px" >
            <div class="row">
                <p class="card-text" style="margin-left:10px">Tupperware</p>
                <button type="button" class="btn btn-dark" style="margin-left:100px; padding-bottom:10px; height:30px" >100</button>
                </div>
            </div>
            </div>

            <div class="card col-sm-3" style="width: 300px; ">
            <img class="card-img-top" src="{{ ('ikon/full-trash-container.png') }}"   alt="Card image cap">
            
            <div class="card-body" style="background-color:grey; height:50px" >
           
                <p class="card-text" >Tupperware</p>
                <button type="button" class="btn btn-dark" style="height:30px" >100</button>
               
            </div>
            </div>

            <div class="card col-sm-3" style="width: 300px;">
            <img class="card-img-top" src="{{ ('ikon/full-trash-container.png') }}"   alt="Card image cap">
            
            <div class="card-body" style="background-color:grey; height:50px" >
            <div class="row">
                <p class="card-text" style="margin-left:10px">Tupperware</p>
                <button type="button" class="btn btn-dark" style="margin-left:100px; padding-bottom:10px; height:30px" >100</button>
                </div>
            </div>
            </div>


            </div>

<!--footer-->
<footer class="footer-area section-gap" >
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6 style="font-weight: bold;">Bank Sampah</h6>
              <div style="margin-left:5%;">
              <p>Layanan</p>
              <p>Hubungi Kami</p>
              <p>Download</p>
              </div>
            </div>
          </div>

          <div class="col-lg-5  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6 style="font-weight: bold;">Panduan</h6>
              <div style="margin-left:5%;">
              <p>Registrasi</p>
              <p>Jual Sampah</p>
              <p>Program Daur Ulang</p>
              </div>
            </div>
          </div>	


          <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
            <div class="single-footer-widget">
              <h6 style="font-weight: bold;">Kontak</h6>
            </div>
          </div>							
        </div>
      </div>
    </footer>


