    <!-- HEADER -->
        <header class="site-header header-opt-1">
            <!-- header-top -->
            <div class="header-top">
                <div class="container">
                    <!-- hotline -->
                    <ul class="nav-top-left" >
                        <li><a href="#">Welcome to KryStal - Always free delivery</a></li>
                    </ul><!-- hotline -->
                    <!-- heder links -->
                    <ul class="nav-top-right krystal-nav">
                       
                       
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Register / Sign in</a></li>
                    </ul><!-- heder links -->
                </div>
            </div> <!-- header-top -->
            <!-- header-content -->
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 nav-left">
                            <!-- logo -->
                            <strong class="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/frontend/images/home1/logo.jpg') }}" alt="logo"></a>
                            </strong><!-- logo -->
                        </div>

                       <div class="col-md-8 nav-mind">
                            <!-- block search -->
                            <div class="block-search">
                                <div class="block-content">
                                    <div class="categori-search  ">
                                  

                                        <select data-placeholder="All Categories" class="chosen-select categori-search-option">
                                            <option value="">All Categories</option>
                                           @foreach($categories as $category)
                                          
                                              <option>{{ $category->name }}</option>
                                             
                                           @endforeach
                                           
                                        </select>
                                    </div>
                                    <div class="form-search">
                                        <form method="GET" action="{{ route('search') }}">
                                            <div class="box-group">
                                                <input type="text" name="query" class="form-control" placeholder="Searh entire store here...">
                                                <button class="btn btn-search" type="submit"><span>search</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- block search -->
                        </div>

                        <div class="col-md-2 nav-right">
                            <!-- block mini cart -->
                            <div class="block-minicart dropdown">
                                
                                <a class="minicart" href="#">
                                    <span class="counter qty">
                                        <span class="cart-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                        <span class="counter-number">{{ Cart::count() }}</span>
                                    </span>
                                    <span class="counter-your-cart">
                                        <span class="counter-label">Your Cart:</span>
                                        <span class="counter-price">${{ Cart::total() }}</span>
                                    </span>
                                </a>
                                <div class="parent-megamenu">
                                    <form>
                                        <div class="minicart-content-wrapper" >
                                            <div class="subtitle">
                                                You have <span>{{ Cart::count() }}</span> item(s) in your cart
                                            </div>
                                            <div class="minicart-items-wrapper">
                                                <ol class="minicart-items">
                                                    @foreach(Cart::instance('default')->content() as $item)
                                                    <li class="product-inner">
                                                        <div class="product-thumb style1">
                                                            <div class="thumb-inner">
                                                                <a href="#"><img width="90" height="90" src="{{ asset('product/'.$item->model->image) }}" alt="c1"></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-innfo">
                                                            <div class="product-name"><a href="#">{{ $item->name }}</a></div>
                                                            <a href="#" class="remove"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                            <span class="price price-dark">
                                                                <ins>${{ $item->price }}</ins>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ol>
                                            </div>
                                            <div class="subtotal">
                                                <span class="label">Total :</span>
                                                <span class="price">${{ Cart::total() }}</span>
                                            </div>
                                            <div class="actions">
                                                <a class="btn btn-viewcart" href="{{ route('cart.index') }}">View cart</a>
                                                <a class="btn btn-checkout" href="{{ route('cart.update') }}">Checkout</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- block mini cart -->
                            <a href="#" class="hidden-md search-hidden"><span class="pe-7s-search"></span></a>
                            <div class="flex">
                            <a class="wishlist-minicart" href="{{ route('wishlist.index') }}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <span class="counte">{{  Cart::instance('wishlist')->count() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- header-content -->
            <!-- header-menu-bar -->
            <div class="header-menu-bar header-sticky">
                <div class="header-menu-nav menu-style-2">
                    <div class="container">
                        <div class="header-menu-nav-inner">
                            <div id="box-vertical-megamenus" class="box-vertical-megamenus nav-toggle-cat">
                                <h4 class="title active">
                                    <span class="btn-open-mobile home-page">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                    <span class="title-menu">All Departments</span>   
                                </h4>
                                <div class="vertical-menu-content" >
                                    <span class="btn-close hidden-md"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <ul class="vertical-menu-list">
                                        
                                        @foreach($categories as $category)
                                        <li class="menu-item-has-children arrow item-megamenu">
                                            <a href="#" class="dropdown-toggle">{{ $category->name }}</a>
                                            <span class="toggle-submenu hidden-md"></span>
                                            <div class="submenu parent-megamenu megamenu">
                                                <div class="row">
                                                    <div class="submenu-banner submenu-banner-menu-1">
                                                        <div class="col-md-4">
                                                            <div class="dropdown-menu-info">
                                                                <h6 class="dropdown-menu-title"></h6>
                                                                <div class="dropdown-menu-content">
                                                                    <ul class="menu">
                                                                        @foreach($category->subcategories as $subcategory)
                                                                        <li class="menu-item"><a href="{{ route('categories.show',$subcategory->slug) }}">{{ $subcategory->name }}s</a></li>

                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                       
                                       @endforeach 
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="header-menu header-menu-resize">
                                
                                <ul class="header-nav krystal-nav">
                                    <li class="btn-close hidden-md"><i class="fa fa-times" aria-hidden="true"></i></li>
                                    <li class="menu-item-has-children arrow">
                                        <a href="index2.html" class="dropdown-toggle">Home</a>
                                        <span class="toggle-submenu hidden-md"></span>
                                        <ul class="submenu parent-megamenu">
                                            <li class="menu-item">
                                                <a href="index.html">Home 1</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="index2.html">Home 2</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="index3.html">Home 3</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="index4.html">Home 4</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="index5.html">Home 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children arrow">
                                        <a href="#" class="dropdown-toggle">Demos</a>
                                        <span class="toggle-submenu hidden-md"></span>
                                        <ul class="submenu parent-megamenu">
                                            <li class="menu-item">
                                                <a href="grid-product.html">Grid Product</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="list-product.html">List Product</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="list-product-right.html">List Product Right</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="grid-product-right.html">Grid Product Right</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="detail.html">Detail Product</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children arrow item-megamenu item-megamenu-sub">
                                        <a href="#" class="dropdown-toggle">Fashions</a>
                                        <span class="toggle-submenu hidden-md"></span>
                                        <div class="submenu parent-megamenu megamenu">
                                            <div class="row">
                                                <div class="submenu-banner submenu-banner-menu-3">
                                                    <div class="col-md-4">
                                                        <div class="dropdown-menu-info">
                                                            <h6 class="dropdown-menu-title">Fashion Clothing</h6>
                                                            <div class="dropdown-menu-content">
                                                                <ul class="menu">
                                                                    <li class="menu-item"><a href="#">Leather Jackets</a></li>
                                                                    <li class="menu-item"><a href="#">Clothings</a></li>
                                                                    <li class="menu-item"><a href="#">shorts</a></li>
                                                                    <li class="menu-item"><a href="#">Swimwear</a></li>
                                                                    <li class="menu-item"><a href="#">Activewear</a></li>
                                                                    <li class="menu-item"><a href="#">Jacket & Coats</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="dropdown-menu-info">
                                                            <h6 class="dropdown-menu-title">Handbags</h6>
                                                            <div class="dropdown-menu-content">
                                                                <ul class="menu">
                                                                    <li class="menu-item"><a href="#">Backpacks</a></li>
                                                                    <li class="menu-item"><a href="#">Travel</a></li>
                                                                    <li class="menu-item"><a href="#">Clutches</a></li>
                                                                    <li class="menu-item"><a href="#">Crossbody</a></li>
                                                                    <li class="menu-item"><a href="#">Bucket</a></li>
                                                                    <li class="menu-item"><a href="#">Wallets</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="dropdown-menu-info">
                                                            <h6 class="dropdown-menu-title">Shoes</h6>
                                                            <div class="dropdown-menu-content">
                                                                <ul class="menu">
                                                                    <li class="menu-item"><a href="#">Shoes Sport</a></li>
                                                                    <li class="menu-item"><a href="#">Sneakers</a></li>
                                                                    <li class="menu-item"><a href="#">Sandals</a></li>
                                                                    <li class="menu-item"><a href="#">Booties</a></li>
                                                                    <li class="menu-item"><a href="#">Heels</a></li>
                                                                </ul>
                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#"><img src="images/home2/menu-banner-3.jpg" alt="banner3"></a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#"><img src="images/home2/menu-banner-4.jpg" alt="banner3"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children arrow">
                                        <a href="#" class="dropdown-toggle">Sub Menu</a>
                                        <span class="toggle-submenu hidden-md"></span>
                                        <ul class="submenu parent-megamenu">
                                            <li class="menu-item">
                                                <a href="checkout.html">Checkout</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shopping-cart.html">Shopping Cart</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="contact-us.html">Contact Us</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="login.html">Login</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact-us.html" class="dropdown-toggle">Contact Us</a>
                                        <span class="toggle-submenu hidden-md"></span>
                                    </li>
                                    <li class="menu-item-has-children arrow">
                                        <a href="#" class="dropdown-toggle">Blog</a>
                                        <span class="toggle-submenu hidden-md"></span>
                                        <ul class="submenu parent-megamenu">
                                            <li class="menu-item">
                                                <a href="blog-grid.html">Blog Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="blog-list.html">Blog List</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="blog-single.html">Blog Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            
                            <span data-action="toggle-nav" class="menu-on-mobile hidden-md">
                                <span class="btn-open-mobile home-page">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="title-menu-mobile">Main menu</span> 
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- end HEADER -->