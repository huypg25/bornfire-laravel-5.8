@extends('site.app')
@section('title', 'Homepage')

@section('content')
<!--    --><?php
//dd($products->images);
//    ?>
    <div class="header-banner">
        <div class="container">
            <div class="row">
                <div class="header-txt">
                    <p class="header-txt-1">Spring 2017</p>
                    <p class="header-txt-2">it&rsquo;s your<br />shine time</p>
                    <div class="disc-btn">
                        <a href="#">discover now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-link">
            <div class="container">
                <div class="row"></div>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#1">Twitter</a></li>
                    <li><a href="#2">Instagram</a></li>
                    <li><a href="#3">Youtube</a></li>
                </ul>
            </div>
        </div>
    </div>
    </header>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="ct t1">
                        <p class="txt-3">Free shipping</p>
                        <p class="txt-4">All order over $300</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="ct t2">
                        <p class="txt-3">Support customer</p>
                        <p class="txt-4">Support 24/7</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="ct t3">
                        <p class="txt-3">Secure payments</p>
                        <p class="txt-4">Support 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slogan">
        <p>
            It started with a simple idea: Create quality, well-designed<br />products
            that I wanted myself.
        </p>
    </div>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-3 offbn">
                    <div class="banner-ct banner-1">
                        <img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner1" />
                        <div class="txt-banner-1">
                            <p class="txt-8">Gold Leaf Ring</p>
                            <p class="txt-9">$179.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="banner-ct banner-2">
                        <img src="{{asset('frontend/img/banner-x.jpg')}}" alt="banner2" />

                        <div class="box-txt-wrapper">
                            <div class="box-txt">
                                <p class="btxt-1">sale up to</p>
                                <p class="btxt-2">70%</p>
                                <p class="btxt-3">Select Gold Clearance</p>
                                <p class="btxt-4">shop now</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="banner-ct banner-3">
                        <img src="{{asset('frontend/img/banner-3.jpg')}}" alt="banner3" />
                        <div class="box-txt-3">
                            <p class="btxt-5">new collection</p>
                            <p class="btxt-6">Leaf Ring</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="banner-ct banner-4">
                        <img src="{{asset('frontend/img/banner-4.jpg')}}" alt="banner4" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="banner-ct banner-5">
                        <img src="{{asset('frontend/img/banner-5.jpg')}}" alt="banner5" />

                        <div class="txt-banner-5">
                            <p class="txt-8">Rose Gold Necklaces</p>
                            <p class="txt-9">$179.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 hidden-bn">
                    <div class="banner-ct banner-1">
                        <img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner1" />
                        <div class="txt-banner-1">
                            <p class="txt-8">Gold Leaf Ring</p>
                            <p class="txt-9">$179.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="banner-ct banner-6">
                        <img src="{{asset('frontend/img/banner-6.jpg')}}" alt="banner6" />
                        <div class="box-txt-6">
                            <p class="btxt-8">Princess Ring<br />Rose Gold</p>
                            <p class="btxt-9">
                                Rose gold plated over brass<br />* One size
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list">
        <div class="container">
            <div class="list-top">
                <h3>Featured items</h3>
                <a href="#" class="vm-btn"
                >view more
                    <div class="i-vm">
                <span
                    class="iconify"
                    data-icon="ion-md-arrow-dropright-circle"
                    data-width="18px"
                    data-height="18px"
                    data-inline="false"
                    style="color: #d6ba8d"
                ></span></div
                    ></a>
            </div>
            <div class="list-bot">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-3">
                        <div class="item">
                         <a href="{{ route('product.show', $product->slug) }}">
                             <div class="list-img" >
                                 @foreach($product->images as $image)
                                     <div class="s-img">
                                         <img src="{{ asset('storage/'.$image->full) }}" alt="" />
                                     </div>
                                 @endforeach
                             </div>
                         </a>
                            <div class="product-action-grid">
                                <div class="add-to-cart">
                                    <a href="{{ route('product.show', $product->slug) }}">add to cart</a>
                                </div>
                                <div class="action-item-box">
                                    <div class="wishlist-btn ac-btn">
                        <span
                            class="iconify"
                            data-icon="ion-android-favorite-outline"
                            data-inline="false"
                        ></span>
                                    </div>
                                    <div class="compare-product ac-btn">
                        <span
                            class="iconify"
                            data-icon="ion-connection-bars"
                            data-inline="false"
                        ></span>
                                    </div>
                                    <div class="quick-view ac-btn">
                        <span
                            class="iconify"
                            data-icon="ion-ios-search"
                            data-inline="false"
                        ></span>
                                    </div>
                                </div>
                            </div>
                            <p class="txt-5">{{$product->name}}</p>
                            <p class="txt-6">{{$product->sale_price}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <h3>Blog update</h3>
            <div class="row">
                @foreach($posts as $post)
                <div class="col-4">
                    <a href="{{ route('post.show', $post->id) }}">
                        <div class="blg">
                            <img class="img-top" src="{{ asset('storage/'.$post->image) }}" alt="post-1" />
                            <div class="blg-bot">
                                <span>{{$post->created_at->diffForHumans()}}</span>
                                <p>{{$post->description}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="gt-btn"><a href="#">Go to blog</a></div>
        </div>
    </div>
    <div class="brand">
        <div class="container">
            <div class="row">
                @foreach($brands as $brand)
                <div class="col-2">
                    <div class="brd"><img src="{{ asset('storage/'.$brand->logo) }}" alt="" /></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
