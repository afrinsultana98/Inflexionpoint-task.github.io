<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        {{--                        <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>--}}
                        {{--                        <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>--}}
                        {{--                        <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>--}}
                        {{--                        <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>--}}
                        <li><a href="{{route('register')}}"><i class="fa fa-user"></i> Register</a></li>
                        <li><a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div> <!-- End header area -->

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="./"><img src="{{asset('/')}}front/img/afrinlogo.jpg" height="50" width="70"></a></h1>
                </div>
            </div>

            {{--            <div class="col-sm-6">--}}
            {{--                <div class="shopping-item">--}}
            {{--                    <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
</div> <!-- End site branding area -->
