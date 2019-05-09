
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/krystal/html/list-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 05:33:15 GMT -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>List Categoris</title>
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

  
</head>
<body class="page-product list-view">
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

        <main class="site-main product-list">
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 float-none float-right padding-left-5">
                        <div class="main-content">
                            <div class="promotion-banner style-3">
                                <a href="#" class="banner-img"><img src="{{ asset('assets/frontend/images/product/banner-product.jpg') }}" alt="banner-product"></a>
                            </div>
                            <div class="toolbar-products">
                                <h4 class="title-product">Grid Search</h4>
                                <div class="toolbar-option">
                                    
                                   
                                </div>  
                            </div>
                            <div class="products products-list">

                                @foreach($products as $product)
                                <div class="product-items">
                                    <div class="product-image">
                                        <a href="#"><img src="{{ asset('product/'.$product->image) }}" alt="p1"></a>
                                        
                                       
                                    </div>
                                    <div class="product-info">
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
                                            {{ $product->information }}
                                            <br>
                                            
                                            
                                           
                                        </div>
                                    </div>
                                    <div class="product-info-price">
                                        <div class="product-info-stock-sku">
                                            <div class="stock available">
                                                <span class="label-stock">Avability:</span> 
                                                 @if($product->quantity > 0)
                                                    In Stock

                                                 @else
                                                Stock out

                                                @endif  
                                            </div>
                                        </div>
                                        <span class="price">
                                            <ins>${{ $product->price }}</ins>
                                            <del>${{ $product->subprice }}</del>
                                        </span>
                                        <div class="single-add-to-cart">
                                             <form action="{{ route('product.store') }}" method="POST">
                                        @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <button type="submit" class="btn-add-to-cart">Add to cart</button>

                                            </form>
                                            <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                            <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="pagination">
                                <ul class="nav-links">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="back-next"><a href="#">Next</a></li>
                                </ul>
                                <span class="show-resuilt">Showing 1-8 of 12 result</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="col-sidebar">
                            <div class="filter-options">
                                <div class="block-title">Shop by</div>
                                <div class="block-content">
                                    <div class="filter-options-item filter-categori">
                                        <div class="filter-options-title">Categories</div>
                                        <div class="filter-options-content">
                                            <ul>
                                                @foreach($categories as $category)
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>{{ $category->name }}</label></li>

                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="filter-options-item filter-brand">
                                        <div class="filter-options-title">Brand</div>
                                        <div class="filter-options-content">
                                            <ul>
                                                @foreach($subcategory as $subc)
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>{{ $subc->name }}</label></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="block-banner-sidebar">
                                <a href="#"><img src="{{ asset('assets/frontend/images/product/banner-sidebar.jpg') }}" alt="banner-sidebar"></a>
                            </div>
                            
                        </div>
                    </div> 
                </div>
            </div>
            <div class="block-recent-view">
                <div class="container">
                    <div class="title-of-section">You may be also interested</div>
                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":6}}'>
                        
                         @foreach($products as $product)
                                        <div class="product-item style1">
                                            <div class="product-inner equal-elem">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <img src="{{ asset('product/'.$product->image) }}">
                                                    </div>
                                                    
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
                                                            <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                           
                                                            <form action="{{ route('product.store') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                                <input type="hidden" name="quantity" value="1">
                                                            <button type="submit" class="add-to-cart">Add to cart</button>
                                                            
                                                           </form>
                                                            <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
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

        <!-- end MAIN -->
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

<!-- Mirrored from kute-themes.com/html/krystal/html/list-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 05:33:18 GMT -->
</html>