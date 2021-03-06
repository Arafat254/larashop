 <footer class="site-footer footer-opt-1 ">
                <div class="footer-top full-width">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="newsletter-title">
                                    <h3 class="h3-newsletter">Sign up for newsletter</h3>
                                    <span class="span-newsletter">Receive $50 Coupon for fist shopping...</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="newsletter-form">
                                    <form action="{{ route('sub') }}" method="POST" id="newsletter-validate-detail" class="form subscribe">
                                        @csrf
                                        <div class="control">
                                            <input type="email" placeholder="Enter your email address" id="newsletter" name="email" class="input-subscribe">
                                            <button type="submit" title="Subscribe" class="btn subscribe">
                                                <span>Subscribe</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="socials">
                                    <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="social"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-column">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <h3 class="title-of-section">Contact information</h3>
                                <div class="contacts">
                                    <h3 class="contacts-title">Address</h3>
                                    <span class="contacts-info">218 Fifth Avenue, HeavenTower NewYork City</span>
                                    <h3 class="contacts-title">Phone</h3>
                                    <span class="contacts-info">(+68) 123 456 7890</span>
                                    <h3 class="contacts-title">Email</h3>
                                    <span class="contacts-info">Hot-Support@Krystal.com</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="links">
                                <h3 class="title-of-section">My account</h3>
                                <ul>
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="#">View Cart</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="links">
                                <h3 class="title-of-section">Information</h3>
                                <ul>
                                    <li><a href="#">Delivery information</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="links">
                                <h3 class="title-of-section">Customer Services</h3>
                                <ul>
                                    <li><a href="#">Shipping & Returns</a></li>
                                    <li><a href="#">Secure Shopping</a></li>
                                    <li><a href="#">International Shipping</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="links">
                        <h3 class="quick-link">Quick Links</h3>
                        <ul>
                            <li><a href="#" class="links-primary">Tablets:</a></li>
                            <li><a href="#">Windows Tablets</a></li>
                            <li><a href="#">Android Tablets</a></li>
                            <li><a href="#">Micromax Tablets</a></li>
                            <li><a href="#">HCL Tablets </a></li>
                            <li><a href="#">Samsung Tablets</a></li>
                            <li><a href="#">Lenovo Tablets</a></li>
                            <li><a href="#">Asus Tablets</a></li>
                            <li><a href="#">Apple Tablets </a></li>
                            <li><a href="#">HCL Tablets</a></li>
                            <li><a href="#">Samsung Tablets </a></li>
                            <li><a href="#">Lenovo Tablets</a></li>
                        </ul>
                        <ul>
                            <li><a href="#" class="links-primary">Mobiles:</a></li>
                            <li><a href="#">Moto E</a></li>
                            <li><a href="#">Samsung Mobile</a></li>
                            <li><a href="#">Micromax Mobile</a></li>
                            <li><a href="#">Nokia Mobile</a></li>
                            <li><a href="#">HTC Mobile</a></li>
                            <li><a href="#">Sony Mobile</a></li>
                            <li><a href="#">Apple Mobile</a></li>
                            <li><a href="#">LG Mobile</a></li>
                            <li><a href="#">Karbonn Mobile</a></li>
                            <li><a href="#">Furniture</a></li>
                            <li><a href="#">Lenovo A7000</a></li>
                            <li><a href="#">Home Store</a></li>
                        </ul>
                        <ul>
                            <li><a href="#" class="links-primary">Watches:</a></li>
                            <li><a href="#">The Big Billion Days</a></li>
                            <li><a href="#">MOTO X Play</a></li>
                            <li><a href="#">Furniture</a></li>
                            <li><a href="#">Lenovo A7000</a></li>
                            <li><a href="#">Home Store</a></li>
                            <li><a href="#">Electronic Sale</a></li>
                            <li><a href="#">Offers</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="copyright full-width">
                     <div class="container">
                         <div class="copyright-right">                
                            © Copyright 2017<span> Krystal</span>. All Rights Reserved.
                        </div>
                        <div class="pay-men">
                            <a href="#"><img src="{{ asset('assets/frontend/images/home1/pay1.jpg') }}" alt="pay1"></a>
                            <a href="#"><img src="{{ asset('assets/frontend/images/home1/pay2.jpg') }}" alt="pay1"></a>
                            <a href="#"><img src="{{ asset('assets/frontend/images/home1/pay3.jpg') }}" alt="pay1"></a>
                            <a href="#"><img src="{{ asset('assets/frontend/images/home1/pay4.jpg') }}" alt="pay1"></a>
                        </div>
                     </div>
                </div>
        </footer><!-- end FOOTER --> 







     