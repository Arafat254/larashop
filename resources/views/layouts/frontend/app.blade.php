
 <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/krystal/html/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 05:32:04 GMT -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Index2</title>
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

    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
</head>
<body class="index-opt-2">
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
        <div id="block-quick-view-popup" class="block-quick-view-popup">
            <div class="quick-view-content">
                <a class="popup-btn-close"><i class="fa fa-times" aria-hidden="true"></i></a>
                <div class="slide-quick">
                    <div class="product-thumbs">
                        <a href="#" class="img-product-thumb"><img src="{{ asset('assets/frontend/images/s-pop1.jpg') }}" alt="p1"></a>
                        <a href="#" class="img-product-thumb"><img src="images/s-pop2.jpg" alt="p1"></a>
                        <a href="#" class="img-product-thumb"><img src="images/s-pop3.jpg" alt="p1"></a>
                        <a href="#" class="img-product-thumb"><img src="images/s-pop4.jpg" alt="p1"></a>
                    </div>
                </div>
                <div class="product-items">
                    <div class="product-image">
                        <a href="#"><img src="images/popup-pro.jpg" alt="p1"></a>
                    </div>
                    <div class="product-info">
                        <div class="product-name"><a href="#">Acer's Aspire S7 is a thin and portable laptop</a></div>
                        <span class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="review">5 Review(s)</span>
                        </span>
                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Add to Wishlist</a>
                        <div class="product-infomation">
                            Description Our new HPB12 / A12 battery is rated at 2000mAh and designed to power up Black and Decker FireStorm line of 12V tools allowing...
                        </div>
                    </div>
                    <div class="product-info-price">
                        <span class="price">
                            <ins>$229.00</ins>
                            <del>$259.00</del>
                        </span>
                        <div class="quantity">
                            <h6 class="quantity-title">Quantity:</h6>
                            <div class="buttons-added">
                                <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                                <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
                        <a href="#" class="btn-add-to-cart">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
            

     @include('layouts.frontend.partials.header')
        <!-- MAIN -->

         @yield('content')

        <!-- end MAIN -->
        <!-- FOOTER -->
       @include('layouts.frontend.partials.footer')   
        
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

<!-- Mirrored from kute-themes.com/html/krystal/html/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 05:32:04 GMT -->
</html>