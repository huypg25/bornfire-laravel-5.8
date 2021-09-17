<div class="wrapper">
    <header class="container-fluid">
        <div class="header-nav">
            <div class="container">
                <div class="row">
                    <a href="{{url('/')}}">
                        <img class="logo" src="{{asset('frontend/img/logo.png')}}" alt="bonfire" />
                    </a>
                    <nav>
                        <ul>
                            <li>
                                <a class="i-cart" href="{{route('checkout.cart')}}"
                                ><span
                                        class="iconify"
                                        data-icon="ion-ios-cart-outline"
                                        data-inline="false"
                                    ></span>
                                    <span class="badge" id="lblCartCount">{{ $cartCount }} </span>
                                </a>
                            </li>
                            <li class="iconNav">
                      <span
                          class="iconify i-nav"
                          data-icon="ion-navicon"
                          data-inline="false"
                      ></span>
                                <div class="dropdown-nav">
                                    @foreach($categories as $cat)
                                        @foreach($cat->items as $category)
                                            @if ($category->items->count() > 0)

                                                <a href="{{route('category.show',$category->slug)}}" id="{{$category->slug}}">{{ $category->name }}</a>

                                            @else
                                                <a  href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                                            @endif
                                        @endforeach
                                    @endforeach



                                </div>

                            </li>
                            <li class="iconPerson">
                                <div
                                    class="iconify i-person"
                                    data-icon="ion-person"
                                    data-inline="false"
                                ></div>
                                <div class="dropdown-person">
                                    @guest
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>

                                    @else
                                        <a href="#">My Account</a>
                                        <a href="#">My Order</a>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endguest
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
