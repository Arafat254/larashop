
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/krystal/html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 05:33:23 GMT -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Checkout</title>
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
<body class="page-product">
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

        <main class="site-main checkout">
           <br><br>
            @if(Session::has('flash_contact'))

                <div id="success" class="alert alert-success text-center">
                    {{Session::get('flash_contact')}}
                </div>
                @endif
            <div class="container">
                <form action="{{ route('order') }}" class="checkout" method="POST">
                    @csrf
                    <h4 class="title-checkout">Biiling Address</h4>
                    <div class="row">
                        <div class="form-group col-md-6">   
                            <label class="title">First Name*</label> 
                            <input type="text" class="form-control" name="first_name" id="forFName" placeholder="Your name" >
                        </div>
                        <div class="form-group col-md-6">   
                            <label class="title">Last Name*</label> 
                            <input type="text" name="last_name" class="form-control" id="forLName" placeholder="Your last name" >
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Email Addreess:</label>
                            <input type="email" name="email" class="form-control" id="forEmail" placeholder="Type your email" >
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Phone numbber*</label>
                            <input type="text" name="phone" class="form-control" placeholder="10 digits format">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Address:</label>
                            <input type="text" name="address" class="form-control" placeholder="Street at apartment number">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Country*</label>
                            <input type="text" name="country" class="form-control" placeholder="United States">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Postcode / ZIP:</label>
                            <input type="text" name="postal_code" class="form-control" placeholder="Your postal code">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Town / City*</label>
                            <input type="text" name="city" class="form-control" placeholder="City name">
                        </div>
                        <div class="form-group payment col-md-6">
                            <h4 class="title-checkout">Payment Method</h4>
                            <p>01845785555 its my bikash number.Please payment in this number and below your payment tranjision id</p>
                            <p></p>
                            <ul>
                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Bikash payment</label></li><br>
                               <input type="text" name="bikash" placeholder="Bikash code" class="form-control">
                            </ul>
                            
                            @if(session()->has('coupon'))

                            <br>

                            <br>
                            <span class="discount">Discount({{ session()->get('coupon')['name'] }}) : 
                            </span><span class="discount"> -${{ $discount }}</span><br>

                            @endif

                            <span class="discount">NewSubtotal</span><span class="discount">${{ $newSubtotal }}</span><br>

                            <span class="grand-total">Grand Total<span>${{ $newTotal }}</span></span>
                            <button type="submit" class="btn-order">Place Order Now</button>
                        </div>
                         </form>
                        <div class="form-group shipping col-md-6">
                            
                            <h4 class="title-checkout">Shipping method</h4>
                            <p>Flat Rate</p>
                            <p>Fixed ${{ Cart::total() }}</p>

                              @if(!session()->has('coupon'))
                            <h4 class="discount">Discount Codes</h4>
                            
                                <label class="title">Enter Your Coupon code:</label>
                                <form action="{{ route('coupon.store') }}" method="POST">
                                    @csrf
                                <input name="coupon_code" type="text" class="form-control">
                                <button type="submit" class="btn-apply">Apply</button>
                                </form>
                          
                               @endif
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

<!-- Mirrored from kute-themes.com/html/krystal/html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 05:33:23 GMT -->
</html>