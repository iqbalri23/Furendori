@extends('layouts.success')

@section('title')
    Registrasi Berhasil
@endsection

@section('content')
    <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img
                src="/images/success.svg"
                alt=""
                class="mb-4"
                style="width: 30%"
              />
              <h2>Selamat datang di Toko !</h2>
              <p>
                Kamu sudah berhasil terdaftar bersama kami. <br />
                Selamat Berbelanja!
              </p>
              <div>
                <a href="{{route('home') }}" class="btn btn-success w-50 mt-4">
                  Menuju Halaman Beranda
                </a>
              </div>
              <div>
                <a href="{{ route('dashboard-settings-account') }}" class="btn btn-signup w-50 mt-2">
                  Menuju Pengaturan Akun
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection