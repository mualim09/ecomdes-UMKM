@extends('layouts.ecommerce')

@section('title')
    <title>Pusat Belanja Online - {{ env('APP_NAME') }}</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="overlay"></div>
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center text-white">
                    <div class="">
                        <p>
                        <h1>Bukan yang Besar Mengalahkan yang Kecil<br />
                            <i>Tapi yang Cepat Akan Mampu Mengalahkan yang Lambat</i>
                        </h1>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Hot Deals Area =================-->
    {{-- <section class="hot_deals_area section_gap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hot_deal_box">
                        <img class="img-fluid" src="{{ asset('ecommerce/img/product/hot_deals/deal1.jpg') }}" alt="">
                        <div class="content">
                            <h2>Hot Deals of this Month</h2>
                            <p>shop now</p>
                        </div>
                        <a class="hot_deal_link" href="#"></a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hot_deal_box">
                        <img class="img-fluid" src="{{ asset('ecommerce/img/product/hot_deals/deal1.jpg') }}" alt="">
                        <div class="content">
                            <h2>Hot Deals of this Month</h2>
                            <p>shop now</p>
                        </div>
                        <a class="hot_deal_link" href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================End Hot Deals Area =================-->

    <!--================Feature Product Area =================-->
    <section class="feature_product_area section_gap">
        <div class="main_box">
            <div class="container-fluid">
                <div class="row">
                    <div class="main_title">
                        <h2>Produk Terbaru</h2>
                        <p>Tampil trendi dengan kumpulan produk kekinian kami.</p>
                    </div>
                </div>
                <div class="row">
                    @forelse($products as $row)
                        <div class="col col1">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{ asset('storage/products/300/' . $row->image) }}"
                                        alt="{{ $row->name }}" class="rounded mx-auto d-block">
                                    <div class="p_icon">
                                        <a href="{{ url('/product/' . $row->slug) }}">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="{{ url('/product/' . $row->slug) }}">
                                    <h4>{{ $row->name }}</h4>
                                </a>
                                <h5>Rp {{ number_format($row->price) }}</h5>
                            </div>
                        </div>
                    @empty

                    @endforelse
                </div>

                <div class="row">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Product Area =================-->
@endsection
