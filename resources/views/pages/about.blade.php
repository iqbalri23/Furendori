@extends('layouts.app')

@section('title')
    Furendori - Beranda
@endsection

@section('content') 
<div class="page-content page-about">
  <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(/images/aquarium.jpg);">
    <div class="container text-center">
      <img src="/images/logo_furendori.png" width ="200px">
      <h1 class="display-4">Furendori Betta</h1>
      <p class="lead">Selamat Datang Di Toko Kami!</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md  mt-5 mb-5 text-center">
        <h2> Tentang Kami</h2>
        <div class="subtitle"> Furendori Betta merupakan salah satu toko di daerah Pondok Labu,Jakarta Selatan berdiri sejak tahun 2019 yang menyediakan jenis ikan cupang seperti 
         Crowntail, Giant, Halfmoon, Doubletail Series, dan juga Plakat untuk kompetisi maupun sebagai ikan hias .  </div>
      </div>
    </div>
    <section class="card mt-5 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md mt-5 mb-5 text-align-left">
            <h2>Kenapa Ikan Cupang?</h2>
            <div class="subtitle">Ikan Cupang merupakan salah satu jenis ikan yang terdapat pada wilayah Asia Tenggara. Kategori Ikan cupang terdiri dari Ikan cupang aduan,
              Ikan cupang hias, dan ikan cupang liar.<br><br>Ikan Cupang Hias sendiri merupakan ikan yang sudah populer sejak lama. Beberapa keistimewaan yang dimilikinya membuat ikan yang satu ini banyak diminati oleh para penggemar akuatik diseluruh dunia.</div>
          </div>
          <div class="col-md text-align-center">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="/images/toko.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/images/toko_2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/images/toko_3.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
    <section class="parallax-image" style="background-image: url(/images/aquarium_2.jpg)">
    </section>
  
    <section class="container card mt-5">
      <div class="row">
        <div class="col-md mt-5 mb-5 text-center">
          <h2>Lokasi dan Kontak</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
              <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.4065434185424!2d106.7883263291544!3d-6.312740866741197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee3c866333c5%3A0xc4da36ab2384cee2!2s2%2C%20Jl.%20Komp.%20Hankam%20No.16%2C%20RT.6%2FRW.6%2C%20Pd.%20Labu%2C%20Kec.%20Cilandak%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012450!5e0!3m2!1sid!2sid!4v1629461725679!5m2!1sid!2sid" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            </div>
            <div class="col-md text-center">
              <h5>Pemesanan untuk ikan cupang yang tersedia dapat dihubungi pada Kontak Dibawah ini</h5>
                  <div class="col-md mt-4">
                    <a href="https://wa.me/62895370034513"><img src="/images/whatsapp.svg" style="max-height: 50px"></a>
                    <h5 class="pt-3">WhatsUp</h5>
                  </div>
                  <div class="col-md mt-3 mb-3">
                    <a href="https://www.instagram.com/furendoribetta/"><img src="/images/instagram.svg" style="max-height: 50px"></a>
                    <h5 class="pt-3">Instagram</h5>
                  </div>
                  <div class="col-md mt-3 mb-5">
                    <a href="https://www.facebook.com/volka.id"><img src="/images/facebook.svg" style="max-height: 50px"></a>
                    <h5 class="pt-3">Facebook</h5>
                  </div>
                </div>
            </div>
            
        </div>
      </div>
    </section>
@endsection