@extends('layouts.frontend.app')

@section('content')
       <main class="site-main">
            <div class="block-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 padding-left-5 main-slide slide-opt-2">
                            <div class="owl-carousel nav-style5" data-nav="true" data-autoplay="false" data-dots="true" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                                <div class="item-slide item-slide-1">
                                    <div class="container">
                                        <div class="slide-desc slide-desc-1">
                                            <div class="p-primary">Crafted For Him</div>
                                            <p>Contemporary designs that Compliment his everyday Look.</p>
                                            <a href="#" class="btn-shop-now">Shop Now</a>                            
                                        </div>
                                    </div>
                                </div>
                                <div class="item-slide item-slide-2">
                                    <div class="container">
                                        <div class="slide-desc slide-desc-2">
                                            <div class="p-primary">The new-Laptop gift you are wishing.</div>
                                            <p>Big screen in incredibly slim designs that in your hand.</p>
                                            <a href="#" class="btn-shop-now">Shop Now</a>                            
                                        </div>
                                    </div>
                                </div>
                                <div class="item-slide item-slide-3">
                                    <div class="container">
                                        <div class="slide-desc slide-desc-3">
                                            <div class="p-primary">Meet Our Brilliant New Rolling Luggage</div>
                                            <p>Convenience that Packs a Punch.</p>
                                            <a href="#" class="btn-shop-now">Shop Now</a>                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-promotion-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="promotion-banner item-1 style-6">
                                <a href="#" class="banner-img"><img src="{{ asset('assets/frontend/images/home2/banner1.jpg') }}" alt="banner1"></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="promotion-banner item-2 style-6">
                                <a href="#" class="banner-img"><img src="{{ asset('assets/frontend/images/home2/banner2.jpg') }}" alt="banner2"></a>
                                <a href="#" class="shop-now style2 hidden-mobile">Shop now<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4 hidden-sm hidden-xs">
                            <div class="promotion-banner item-3 style-6">
                                <a href="#" class="banner-img"><img src="{{ asset('assets/frontend/images/home2/banner3.jpg') }}" alt="banner3"></a>
                                <a href="#" class="shop-now style2 ">Shop now<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-feature-product">
                <div class="container">
                    <div class="title-of-section">Feauther Products</div>
                    <div class="tab-product tab-product-fade-effect">
                        <ul class="box-tabs nav-tab style3">
                            
                             
                         
                        </ul>
                        <div class="tab-content">
                            <div class="tab-container">
                                
                                <div id="" class="tab-panel active">
                                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":5}}'>
                                        @foreach($products as $product)
                                        <div class="product-item style1">
                                            <div class="product-inner equal-elem">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <img src="{{ asset('product/'.$product->image) }}">
                                                    </div>
                                                    <span class="onsale">-50%</span>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="{{ route('product.show',$product->slug) }}">{{ $product->name }}</a></div>
                                                    <span class="price price-dark">
                                                        <ins>${{ $product->price }}</ins>
                                                    </span>
                                                       <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                    <div class="group-btn-hover">
                                                        <div class="inner">
                                                            <div class="flex">
                                                                  <form action="{{ route('compare.store') }}" method="POST">
                                                            @csrf
                                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                               <button type="submit" class="compare"><i class="flaticon-refresh-square-arrows"></i></button>
                                                            </form>
                                                           
                                                           
                                                            <form action="{{ route('product.store') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                                <input type="hidden" name="quantity" value="1">
                                                            <button type="submit" class="add-to-cart">Add to cart</button>
                                                            
                                                           </form>

                                                           <form action="{{ route('wishlist.store') }}" method="POST">
                                                            @csrf
                                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                                <button type="submit" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       @endforeach
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-bestseller-and-deals full-width">
                <div class="container">
                    <div class="block-bestseller-product style2">
                        <div class="title-of-section">Bestseller Products</div>
                        <div class="bestseller-and-deals-content border-background equal-container">

                            @foreach($productsellers as $product)
                            <div class="product-item style1 col-md-4 col-sm-6 col-xs-6 padding-0">
                                <div class="product-inner equal-elem">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#"><img src="{{ asset('product/'.$product->image) }}"></a>
                                        </div>
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a href="#">{{ $product->name }}</a></div>
                                        <span class="price price-dark">
                                            <ins>${{ $product->price }}</ins>
                                        </span>
                                        <span class="star-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span class="review">5 Review(s)</span>
                                        </span>
                                        <div class="group-btn-hover">
                                            <div class="inner">
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                <a href="#" class="add-to-cart">Add to cart</a>
                                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
                        </div>
                    <div class="block-daily-deals style3">
                        <div class="title-of-section">Deals Of the week</div>
                        <div class="owl-carousel nav-style2" data-nav="true" data-autoplay="false" data-dots="true" data-loop="true" data-margin="10" data-responsive='{"0":{"items":1},"480":{"items":2},"680":{"items":3},"768":{"items":1}}'>
                            <div class="product-item style1">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#"><img src="images/home2/d1.jpg" alt="d1"></a>
                                        </div>
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a href="#">Parka with a hood Pandora Coat</a></div>
                                        <span class="price">
                                            <ins>$229.00</ins>
                                            <del>$259.00</del>
                                        </span>
                                        <span class="onsale">-50%</span>
                                        <span class="star-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span class="review">5 Review(s)</span>
                                        </span>
                                    </div>
                                    <div class="product-count-down">
                                        <div class="title-count-down">Hurry up!<span>Deal ends in:</span></div>
                                        <div class="kt-countdown" data-y="2017" data-m="8" data-d="1" data-h="10" data-i="0" data-s="0"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item style1">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#"><img src="images/home2/d1.jpg" alt="d1"></a>
                                        </div>
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a href="#">Parka with a hood Pandora Coat</a></div>
                                        <span class="price">
                                            <ins>$229.00</ins>
                                            <del>$259.00</del>
                                        </span>
                                        <span class="onsale">-50%</span>
                                        <span class="star-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span class="review">5 Review(s)</span>
                                        </span>
                                    </div>
                                    <div class="product-count-down">
                                        <div class="title-count-down">Hurry up!<span>Deal ends in:</span></div>
                                        <div class="kt-countdown" data-y="2017" data-m="8" data-d="1" data-h="10" data-i="0" data-s="0"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item style1">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#"><img src="images/home2/d1.jpg" alt="d1"></a>
                                        </div>
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a href="#">Parka with a hood Pandora Coat</a></div>
                                        <span class="price">
                                            <ins>$229.00</ins>
                                            <del>$259.00</del>
                                        </span>
                                        <span class="onsale">-50%</span>
                                        <span class="star-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span class="review">5 Review(s)</span>
                                        </span>
                                    </div>
                                    <div class="product-count-down">
                                        <div class="title-count-down">Hurry up!<span>Deal ends in:</span></div>
                                        <div class="kt-countdown" data-y="2017" data-m="8" data-d="1" data-h="10" data-i="0" data-s="0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-promotion-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="promotion-banner style-7">
                                <a href="#" class="banner-img"><img src="{{ asset('assets/frontend/images/home2/banner4.jpg') }}" alt="banner4"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="promotion-banner style-7">
                                <a href="#" class="banner-img"><img src="{{ asset('assets/frontend/images/home2/banner5.jpg') }}" alt="banner5"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-recent-view">
                <div class="container">
                    <div class="title-of-section">Recently Viewed Products</div>
                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":6}}'>

                        @foreach($productsrandom as $product)
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="{{ asset('product/'.$product->image) }}"></a>
                                    </div>
                                    
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">{{ $product->name }}</a></div>
                                    <span class="price">
                                        <ins>${{ $product->price }}</ins>
                                        <del>${{ $product->subprice }}</del>
                                    </span>
                                    <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="block-section-brand">
                <div class="container">
                    <div class="section-brand style1">
                        <div class="owl-carousel nav-style3" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="2" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":4},"1000":{"items":6}}'>
                            <a href="#" class="item-brand"><img src="{{ asset('assets/frontend/images/home1/brand1.jpg') }}" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="{{ asset('assets/frontend/images/home1/brand1.jpg') }}" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="{{ asset('assets/frontend/images/home1/brand1.jpg') }}" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="{{ asset('assets/frontend/images/home1/brand1.jpg') }}" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="{{ asset('assets/frontend/images/home1/brand1.jpg') }}" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="{{ asset('assets/frontend/images/home1/brand1.jpg') }}" alt="brand1"></a>
                        </div>
                    </div>
                </div>
            </div>
            </main>


            

@endsection