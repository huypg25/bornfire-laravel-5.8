@extends('site.app')
@section('title', 'Homepage')

@section('content')
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
                    <div class="col-3">
                        <div class="item">
                            <div class="list-img">
                                <div class="s-img">
                                    <img src="img/item-1.jpg" alt="" />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FF0000"
                                        alt=""
                                    />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FFFF00"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div class="product-action-grid">
                                <div class="add-to-cart">
                                    <a href="#">add to cart</a>
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
                            <p class="txt-5">Kubusbowl Small</p>
                            <p class="txt-6">$19.00</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="list-img">
                                <div class="s-img">
                                    <img src="img/item-2.jpg" alt="" />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FF0000"
                                        alt=""
                                    />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FFFF00"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div class="product-action-grid">
                                <div class="add-to-cart">
                                    <a href="#">add to cart</a>
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
                            <p class="txt-5">Divine Footstool</p>
                            <p class="txt-6">$179.00</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="list-img">
                                <div class="s-img">
                                    <img src="img/item-3.jpg" alt="" />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FF0000"
                                        alt=""
                                    />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FFFF00"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div class="product-action-grid">
                                <div class="add-to-cart">
                                    <a href="#">add to cart</a>
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
                            <p class="txt-5">Cache Pendant Lamp</p>
                            <p class="txt-6">$179.00</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="list-img">
                                <div class="s-img">
                                    <img src="img/item-4.jpg" alt="" />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FF0000"
                                        alt=""
                                    />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FFFF00"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div class="product-action-grid">
                                <div class="add-to-cart">
                                    <a href="#">add to cart</a>
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
                            <p class="txt-5">RIO Chair</p>
                            <p class="txt-6">$179.00</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="list-img">
                                <div class="s-img">
                                    <img src="img/item-5.jpg" alt="" />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FF0000"
                                        alt=""
                                    />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FFFF00"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div class="product-action-grid">
                                <div class="add-to-cart">
                                    <a href="#">add to cart</a>
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
                            <p class="txt-5">Cache Pendant Lamp</p>
                            <p class="txt-6">$179.00</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="list-img">
                                <div class="s-img">
                                    <img src="img/item-6.jpg" alt="" />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FF0000"
                                        alt=""
                                    />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FFFF00"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div class="product-action-grid">
                                <div class="add-to-cart">
                                    <a href="#">add to cart</a>
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
                            <p class="txt-5">Prismatic table</p>
                            <p class="txt-6">$69.00</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="list-img">
                                <div class="s-img">
                                    <img src="img/item-7.jpg" alt="" />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FF0000"
                                        alt=""
                                    />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FFFF00"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div class="product-action-grid">
                                <div class="add-to-cart">
                                    <a href="#">add to cart</a>
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
                            <p class="txt-5">CobraT hermo Cup</p>
                            <p class="txt-6">$179.00</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="item">
                            <div class="list-img">
                                <div class="s-img">
                                    <img src="img/item-8.jpg" alt="" />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FF0000"
                                        alt=""
                                    />
                                </div>
                                <div class="s-img">
                                    <img
                                        src="https://via.placeholder.com/270x320/FFFF00"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div class="product-action-grid">
                                <div class="add-to-cart">
                                    <a href="#">add to cart</a>
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
                            <p class="txt-5">Montana Collection</p>
                            <p class="txt-6">$179.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <h3>Blog update</h3>
            <div class="row">
                <div class="col-4">
                    <a href="#">
                        <div class="blg">
                            <img class="img-top" src="img/blog-1.jpg" alt="blog-1" />
                            <div class="blg-bot">
                                <span>JULY 14TH, 2016</span>
                                <p>8 Things I’ve Learned from<br />8 Years of Bonfire</p>

                                <div class="lv">
                      <span
                          class="iconify"
                          data-icon="ion:eye"
                          data-inline="false"
                      ></span>
                                    <span class="txt-7">941 Views</span>

                                    <span
                                        class="iconify"
                                        data-icon="ion:share-social"
                                        data-inline="false"
                                    ></span
                                    ><span class="txt-7">27 Likes</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        <div class="blg">
                            <img class="img-top" src="img/blog-2.jpg" alt="blog-2" />
                            <div class="blg-bot">
                                <span>JULY 14TH, 2016</span>
                                <p>How I Stay Inspired and<br />Come Up with New Ideas</p>

                                <div class="lv">
                      <span
                          class="iconify"
                          data-icon="ion:eye"
                          data-inline="false"
                      ></span>
                                    <span class="txt-7">941 Views</span>
                                    <span
                                        class="iconify"
                                        data-icon="ion:share-social"
                                        data-inline="false"
                                    ></span
                                    ><span class="txt-7">27 Likes</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        <div class="blg">
                            <img class="img-top" src="img/blog-3.jpg" alt="blog-3" />
                            <div class="blg-bot">
                                <span>JULY 14TH, 2016</span>
                                <p>Wait, there’s a human on<br />the other end?</p>

                                <div class="lv">
                      <span
                          class="iconify"
                          data-icon="ion:eye"
                          data-inline="false"
                      ></span>
                                    <span class="txt-7">941 Views</span>
                                    <span
                                        class="iconify"
                                        data-icon="ion:share-social"
                                        data-inline="false"
                                    ></span
                                    ><span class="txt-7">27 Likes</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="gt-btn"><a href="#">Go to blog</a></div>
        </div>
    </div>
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="brd"><img src="img/brand/rolex.png" alt="" /></div>
                </div>
                <div class="col-2">
                    <div class="brd"><img src="img/brand/elle.png" alt="" /></div>
                </div>
                <div class="col-2">
                    <div class="brd"><img src="img/brand/john.png" alt="" /></div>
                </div>
                <div class="col-2">
                    <div class="brd"><img src="img/brand/jubilee.png" alt="" /></div>
                </div>
                <div class="col-2">
                    <div class="brd"><img src="img/brand/triton.png" alt="" /></div>
                </div>
                <div class="col-2">
                    <div class="brd"><img src="img/brand/pandora.png" alt="" /></div>
                </div>
            </div>
        </div>
    </div>
@stop
