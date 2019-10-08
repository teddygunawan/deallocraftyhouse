<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand home" href="/">
                <img src="/img/logo.png" alt="Deallo Craft House" class="hidden-xs">
                <img src="/img/logo.png" alt="Deallo Craft House" class="visible-xs"><span class="sr-only">Deallo Craft House</span>
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
                <a class="btn btn-default navbar-toggle" href="#">
                    <i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li class="{{ Request::is('/') || Request::is('login') || Request::is('register') ? 'active' : '' }}"><a href="/">Home</a>
                </li>
                <li class="dropdown yamm-fw {{ Request::is('category*') || Request::is('all-products') ? 'active' : '' }}">
                    <a class="dropdown-toggle" data-hover="dropdown" data-delay="200" href="/all-products">Products <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    @isset($items)
                                        @foreach($items as $item)
                                        <div class="col-sm-3">
                                            <h5><a href="/category/{{ $item->id }}">{{ $item->name }}</a></h5>
                                            <ul>
                                                @foreach($item['children'] as $child)
                                                <li><a href="/category/{{ $item->id }}/{{ $child->id }}">{{ $child->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endforeach
                                    @endisset
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="#">STORES</a>
                </li> -->
                <li>
                    <a href="#">ABOUT US</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-search fa-lg" data-toggle="collapse" data-target="#search">
                        </i> 
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class="navbar-buttons">

            <div class="navbar-collapse collapse right" id="basket-overview">
                @if (Auth::guest())
                    <a href="{{ route('register') }}">Register</a>
                    <span>&nbsp;&nbsp;</span>
                    <!-- <a href="#" class="btn btn-secondary navbar-btn" data-toggle="modal" data-target="#login-modal">Login</a> -->
                    <a href="{{ route('login') }}" class="btn btn-secondary navbar-btn">Login</a>
                    <span class="divider-vertical"></span>
                    <a href="{{route('login')}}"><i class="fa fa-shopping-cart fa-lg"></i><span class="hidden-sm"></span></a>
            
                @else
                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-ul" aria-hidden="true"></i> {{ Auth::user()->fname }} {{ Auth::user()->lname }}<span>&nbsp;&nbsp;</span><span class="caret"></span></a>
                    <span>&nbsp;&nbsp;</span>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="menuitem" href="/user/{{ Auth::user()->id }}"><i class="fa fa-cog" aria-hidden="true"></i>My Account</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="menuitem" href="/user/{{ Auth::user()->id }}/orders"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>My Orders</a>
                            </li>
                            @if(Auth::seller())
                            <li class="divider"></li>
                                <li>
                                    <a class="menuitem" href="/user/{{ Auth::user()->id }}/shop"><i class="fa fa-briefcase" aria-hidden="true"></i>My Shop</a>
                                </li>
                            @endif
                        </ul>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-secondary navbar-btn">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    <span class="divider-vertical"></span>
                    <a href="/cart/{{ Auth::user()->id}}/{{OrderHelper::validateOrder(Auth::user()->id)->id}}"><i class="fa fa-shopping-cart fa-lg"></i><span class="hidden-sm"></span></a>
            
                @endif
                </div>
            <!--/.nav-collapse -->

            <!-- <div class="navbar-collapse collapse right" id="search-not-mobile">
                <button type="button" class="btn navbar-btn btn-secondary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
                <a href="#"><i class="fa fa-search" data-toggle="collapse" data-target="#search"></i><span class="hidden-sm"></span></a> 
            </div> -->

        </div>

        <div class="collapse clearfix" id="search">
            <form id="searchItem" class="navbar-form" role="search" method="GET" action="/result" >
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <a onclick="confirmSearch()" class="input-group-btn btn btn-primary">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </form>
        </div>
        <!--/.nav-collapse -->

    </div>
</div>
<script>
    function confirmSearch(){
        document.getElementById("searchItem").submit();
    }
</script>