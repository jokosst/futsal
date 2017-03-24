<?php
  include ('header.php');
?> 

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1><b>MAENYOK.COM<b></h1>
                            <p>Dapatkan Lapangan yang Sesuai dengan jadwal Bermain Futsal Kalian.</p>
 <div class="col-md-6">
<select class="form-control">
<option value="0">Tanggal</option>
  <option value="">XXX</option>
  <option value="">XXX</option>
  <option value="">XXX</option>
</select>
</div>
 <div class="col-md-6">
<select class="form-control">
<option value="0">Jam</option>
  <option value="2010">XXX</option>
  <option value="2011">XXX</option>
  <option value="2012">XXX</option>
</select>
</div><br><br><br>
 <div class="col-md-6">
<select class="form-control">
<option value="0">Lapangan</option>
  <option value="">XXX</option>
  <option value="">XXX</option>
</select>
</div>
<div class="col-md-6">
<select class="form-control">
<option value="0">Lokasi</option>
  <option value="">XXX</option>
  <option value="">XXX</option>
</select>
</div>
<br><br><br>
                            <a href="#" class="btn btn-outline btn-xl page-scroll">Cari</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                   <img src="img/player.png">
                </div>
            </div>
        </div>
    </header>

<section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Statistik Harga Sembako</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                    <div class="form-group">
                    <div class="col-md-3">
<label>Perkembangan Harga di :</label>
</div>
 <div class="col-md-3">
<select name="textcari" id="txtcari" onchange="cari()" class="form-control">
<option value="0">Pasar XXX</option>
  <option value="">Pasar1</option>
  <option value="">Pasar2</option>
  <option value="">Pasar3</option>
  <option value="">Pasar4</option>
  <option value="">Pasar5</option>
</select>
</div>
 <div class="col-md-2">
<select name="textcari" id="txtcari" onchange="cari()" class="form-control">
<option value="0">Tahun</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2016">2016</option>
</select>
</div>
 <div class="col-md-2">
<select name="katagori" id="txtkatagori" onchange="cari()" class="form-control">
<option value="0">Bulan</option>
  <option value="">Januari</option>
  <option value="">Februari</option>
</select>
</div>
</div><br><br><br>


                        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>KOMODITAS SEMBAKO</th>
                  <th>TANGGAL 1</th>
                  <th>TANGGAL 2</th>
                  <th>TANGGAL 3</th>
                  <th>PREDIKSI</th>
                </tr>
                </thead>
                <tbody id="hasil">
                
                <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>11</td>
                  <td>1</td>
                </tr>
                </tbody>
                </tbody>
              </table>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2>WE <i class="fa fa-heart"></i> YOU ESTI!</h2>
            <ul class="list-inline list-social">
                <li class="social-twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-google-plus">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>

    </section>

   <?php
include('footer.php');
     ?>