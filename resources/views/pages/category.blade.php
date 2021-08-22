@extends('layouts.app')

@section('title')
    Furendori - Kategori
@endsection

@section('content')
    <div class="page-content page-home">
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12"data-aos="fade-up">
              <h5>Semua Kategori</h5>
            </div>
          </div>
            <div class="row"> 
                @php $incrementCategory = 0 @endphp
                @forelse ($categories as $category)
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $incrementCategory+= 100 }}">
                    <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                        <div class="categories-images">
                            <img src="{{ Storage::url($category->photo) }}" 
                                 alt="" 
                                class="w-100">
                        </div>
                            <p class="categories-text">{{ $category->name }}</p>
                    </a>
                </div>
                @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    Tidak ada Kategori !
                </div>    
                @endforelse
            </div>
        </div>
      </section>
      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos"fade-up">
              <h5>Daftar Produk</h5>
            </div>
          </div>
           <div class="row">
              @php $incrementProduct = 0 @endphp
              @forelse ($products as $product)
              @if ($product->price_discount >='1')
              <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+= 100 }}">
                    <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                        <div class="products-thumbnail">
                            <div class="products-image" 
                                style=" 
                                    @if($product->galleries->count())
                                            background-image: url('{{ Storage::url($product->galleries->first()->photos) }}');
                                    @else
                                            background-color: #eee;
                                    @endif
                                    "
                                    >
                            </div>
                        </div>
                        <div class="products-text">{{ $product->name }}</div>
                        <div class="products-price"><del>Rp.{{ number_format($product->price) }}</del></div>
                        <div class="products-price">Rp.{{ number_format($product->price_discount) }}</div>
                    </a>
                </div>
                @else
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+= 100 }}">
                    <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                        <div class="products-thumbnail">
                            <div class="products-image" 
                                style=" 
                                    @if($product->galleries->count())
                                            background-image: url('{{ Storage::url($product->galleries->first()->photos) }}');
                                    @else
                                            background-color: #eee;
                                    @endif
                                    "
                                    >
                            </div>
                        </div>
                        <div class="products-text">{{ $product->name }}</div>
                        <div class="products-price">Rp.{{ number_format($product->price) }}</div>
                    </a>
                </div>
                @endif
                @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    Tidak ada Produk !
                </div>   
                @endforelse                
            </div>
            <div class="row">
              <div class="col-12 mt-4">
                {{ $products->links() }}
              </div>
            </div>
          </div>
      </section>
    </div>
@endsection
