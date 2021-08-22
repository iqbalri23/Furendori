@extends('layouts.success')

@section('title')
    Transaksi Berhasil
@endsection

@section('content')
    <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img
                src="/images/success3.svg"
                alt=""
                class="mb-4"
                style="width: 30%"
              />
              <h2>Transaksi Berhasil</h2>
              <p>
                Silahkan tunggu konfirmasi eEmail dari kami dan kami akan
                menginformasikan resi secepat mungkin!
              </p>
              <div>
                <a href="/dashboard.html" class="btn btn-success w-50 mt-4">
                  My Dashboard
                </a>
              </div>
              <div>
                <a href="/index.html" class="btn btn-signup w-50 mt-2">
                  Lanjutkan Belanja
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
