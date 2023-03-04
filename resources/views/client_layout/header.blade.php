 <!-- Start Main Top -->
 <div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              
                <div class="right-phone-box">
                    <p> <a href="#"><i class="fa fa-phone s_color"></i>  +212 666 95 47 70</a></p>
                </div>
                <div class="our-link">
                    <ul>
                       @if (Session::has('client'))
                       <li><a href="{{url('logout')}}"><i class="fa fa-user s_color"></i> Logout</a></li>
                       @else
                       <li><a href="{{url('signin')}}"><i class="fa fa-user s_color"></i> SingnIn</a></li>
                       @endif
                   
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="login-box">
                    <li><a href="{{url('login')}}" class="btn btn-success"><i class="fa fa-user s_color"></i> login</a></li>
                </div>
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> Livraison rapide 
                            </li>
                           
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->

<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="frontend/images/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item {{request()->is('/') ? 'active' : ''}}"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item {{request()->is('shop') ? 'active' : ''}}">
                        <a href="{{url('/shop')}}" class="nav-link">SHOP</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu">
                        <a href="#">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">{{Session::has('cart') ? Session::get('cart') -> totalQty : 0}}</span>
                            <p>My Cart</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    @if (Session::has('topCart'))
                        @foreach (Session::get('topCart') as $product)
                        <li>
                            <a href="#" class="photo"><img src="{{asset('storage/product_images/'.$product["product_image"])}}" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">{{$product["product_name"]}}</a></h6>
                            <p>{{$product["qty"]}}x - <span class="price">{{$product["product_price"]}} DH </span></p>
                        </li>
                        @endforeach
                    @endif
                 
                    <li class="total">
                        <a href="{{url('/cart')}}"class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total
                            </strong>: {{Session::has('cart') ? Session::get('cart')->totalPrice : 0}} DH</span>
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->

<!-- Start Top Search -->
<form>
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
</form>
<!-- End Top Search -->

