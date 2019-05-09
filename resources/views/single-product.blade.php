
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/krystal/html/detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 05:33:18 GMT -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="page-product detail-product">
    <div class="wrapper">
        <form id="block-search-mobile" method="get" class="block-search-mobile">
            <div class="form-content">
                <div class="control">
                    <a href="#" class="close-block-serach"><span class="icon fa fa-times"></span></a>
                    <input type="text" name="search" placeholder="Search" class="input-subscribe">
                    <button type="submit" class="btn search">
                        <span><i class="fa fa-search" aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>
        </form>
        <!-- HEADER -->
        
        @include('layouts.frontend.partials.header')
        <!-- end HEADER -->        
        <!-- MAIN -->
        <main class="site-main">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="#">Home </a></li>
                    <li class="active"><a href="#">Detail</a></li>
                </ol>
            </div>
            <div class="container">
                <div class="product-content-single">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 padding-right">
                            <div class="product-media">
                                <div class="image-preview-container image-thick-box image_preview_container">
                                    <img id="img_zoom" data-zoom-image="{{ asset('product/'.$product->image) }}" src="{{ asset('product/'.$product->image) }}" alt="">
                                    <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="product-preview image-small product_preview">
                                    <div id="thumbnails" class="thumbnails_carousel owl-carousel nav-style4" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":5},"600":{"items":5},"1000":{"items":5}}'>

                                        @foreach($product->images as $image)
                                        <a href="#" data-image="{{ asset('product/gallary/'.$image->image) }}" data-zoom-image="{{ asset('product/gallary/'.$image->image) }}">
                                            <img src="{{ asset('product/gallary/'.$image->image) }}" data-large-image="{{ asset('product/gallary/'.$image->image) }}" alt="i1">
                                        </a>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="product-info-main">
                                <div class="product-name"><a href="#">{{ $product->name }}</a></div>
                                <span class="star-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span class="review">5 Review(s)</span>
                                </span>
                                <div class="product-infomation">
                                    {{ str_limit($product->description,250) }}<br>
                                    <br>
                                    
                                </div>
                                <div class="group-btn-share">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/detail/btn1.png') }}" alt="btn1"></a>
                                    <a href="#"><img src="{{ asset('assets/frontend/images/detail/btn2.png') }}" alt="btn1"></a>
                                    <a href="#"><img src="{{ asset('assets/frontend/images/detail/btn3.png') }}" alt="btn1"></a>
                                    <a href="#"><img src="{{ asset('assets/frontend/images/detail/btn4.png') }}" alt="btn1"></a>
                                </div>
                                <div class="product-description">
                                    {{ str_limit($product->information,250) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-info-price">
                                <div class="product-info-stock-sku">
                                    <div class="stock available">
                                        <span class="label-stock">Availability: </span>
                                        @if($product->quantity > 0)
                                            In Stock
                                        @else
                                            Stock out

                                        @endif        
                                    </div>
                                </div>
                                <div class="transportation">
                                    <span>item with Free Delivery</span>
                                </div>
                                <span class="price">
                                    <ins>${{ $product->price }}</ins>
                                    <del>${{ $product->subprice }}</del>
                                </span>
                                @if($product->quantity > 0)
                                <form action="{{ route('product.store') }}" method="POST">
                                        @csrf
                                <div class="quantity">
                                    <h6 class="quantity-title">Quantity:</h6>
                                    <div class="buttons-added">
                                        <input type="text" value="1" name="quantity" title="Qty" class="input-text qty text" size="1">
                                        <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                        <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                    </div>
                                </div>
                                @else

                                @endif
                                @if($product->quantity > 0)
                                <div class="single-add-to-cart">

                                    
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                    <button type="submit" class="btn-add-to-cart">Add to cart</button>

                                    </form>
                                    <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                </div>
                                @else

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-details-product">
                    <ul class="box-tab nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Addtional Infomation</a></li>
                        <li><a data-toggle="tab" href="#tab-3">Reviews</a></li>
                    </ul>
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <div class="box-content">
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-panel">
                            <div class="box-content">
                                <p>{{ $product->information }}</p>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-panel">
                            <div class="box-content">
                                <form method="post" action="#"  class="new-review-form">
                                    <a href="#" class="form-title">Write a review</a>
                                    <div class="form-content">
                                        <p class="form-row form-row-wide">
                                            <label>Name</label>
                                            <input type="text" value="" name="text" placeholder="Enter your name" class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Email</label>
                                            <input type="text" name="text" placeholder="admin@example.com" class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Review Title<span class="required">*</span></label>
                                            <input type="email" name="email" placeholder="Give your review a title" class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Body of Review (1500)</label>
                                            <textarea aria-invalid="false" class="textarea-control" rows="5" cols="40" name="message"></textarea>
                                        </p>
                                        <p class="form-row">
                                            <input type="submit" value="Submit Review" name="Submit" class="button-submit">
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>     
                    </div>  
                </div> 
            </div>
            <div class="block-recent-view">
                <div class="container">
                    <div class="title-of-section">You may be also interested</div>
                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":6}}'>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r1.jpg" alt="r1"></a>
                                    </div>
                                    <span class="onsale">-50%</span>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Women Hats</a></div>
                                    <span class="price">
                                        <ins>$229.00</ins>
                                        <del>$259.00</del>
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
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r2.jpg" alt="r2"></a>
                                    </div>
                                    <span class="onnew">new</span>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo"> 
                                    <div class="product-name"><a href="#">Basketball Sports Shoes</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
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
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r3.jpg" alt="r3"></a>
                                    </div>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Dark Green Prada Sneakers</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
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
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r4.jpg" alt="r4"></a>
                                    </div>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Clutches in Men's Bags for Men</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r5.jpg" alt="r5"></a>
                                    </div>
                                    <span class="onsale">-50%</span>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Parka With a Hood</a></div>
                                    <span class="price">
                                        <ins>$229.00</ins>
                                        <del>$259.00</del>
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
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r6.jpg" alt="r6"></a>
                                    </div>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Smartphone MTK6737 Quad Core.</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-section-brand">
                <div class="container">
                    <div class="section-brand style1">
                        <div class="owl-carousel nav-style3" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="2" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":4},"1000":{"items":6}}'>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- end MAIN -->
        <!-- FOOTER -->


        @include('layouts.frontend.partials.footer')

        <!-- end FOOTER -->    
        
        <!--back-to-top  -->
        <!-- <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a> -->
        
    </div>
    <a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
    <!-- jQuery -->    
       <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/wow.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.actual.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/chosen.jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.bxslider.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.elevateZoom.min.js') }}"></script>
    
    <script src="{{ asset('assets/frontend/js/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/fancybox/source/helpers/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('assets/backend/js/fancybox/source/helpers/jquery.fancybox-thumbs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/function.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/Modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.plugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.countdown.js') }}"></script>
</body>

<!-- Mirrored from kute-themes.com/html/krystal/html/detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 05:33:23 GMT -->
</html>