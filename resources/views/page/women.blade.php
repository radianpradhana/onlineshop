@extends('layout.master')

@section('title', 'Women')

@section('content')

@include('layout.banner')

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Women's Clothing</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- Shop -->
<div class="innerf-pages section">
    <div class="fh-container mx-auto">
        <div class="row my-lg-5 mb-5">
            <!-- grid left -->
            <div class="side-bar col-lg-3">
                <!--preference -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">
                        Categories</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked" name="cat1" id="cat1">
                            <label for="cat1">Fashion</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="cat2" id="cat2">
                            <label for="cat2">Popular</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="cat3" id="cat3">
                            <label for="cat3">Trending</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="cat4" id="cat4">
                            <label for="cat4">Sort by popularity</label>
                        </li>

                    </ul>
                </div>
                <!-- // preference -->
                <div class="search-hotel">
                    <h3 class="shopf-sear-headits-sear-head">
                        <span>Brand</span> in focus</h3>
                    <form action="#" method="post">
                        <input type="search" placeholder="search here" name="search" required="">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <!-- price range -->
                <div class="range">
                    <h3 class="shopf-sear-headits-sear-head">
                        <span>Price</span> range</h3>
                    <ul class="dropdown-menu6">
                        <li>

                            <div id="slider-range"></div>
                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                        </li>
                    </ul>
                </div>
                <!-- //price range -->
                <!--preference -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">
                        <span>latest</span> arrivals</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked" name="arr1" id="arr1">
                            <label for="arr1">last 30 days</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="arr2" id="arr2">
                            <label for="arr2">last 90 days</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="arr3" id="arr3">
                            <label for="arr3">last 150 days</label>
                        </li>

                    </ul>
                </div>
                <!-- // preference -->
                <!-- discounts -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">Sizes</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked" name="size1" id="size1">
                            <label for="size1">XS</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size2" id="size2">
                            <label for="size2">S</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size3" id="size3">
                            <label for="size3">M</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size4" id="size4">
                            <label for="size4">L</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size5" id="size5">
                            <label for="size5">XL</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size6" id="size6">
                            <label for="size6">XXL</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size7" id="size7">
                            <label for="size7">XXXL</label>
                        </li>
                    </ul>
                </div>
                <!-- //discounts -->
                <!-- Binding -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">Color</h3>
                    <div class="d-flex">
                        <ul>
                            <li>
                                <input type="checkbox" class="checked" name="color1" id="color1">
                                <label for="color1">Black</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color2" id="color2">
                                <label for="color2">Blue</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color3" id="color3">
                                <label for="color3">Red</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color4" id="color4">
                                <label for="color4">Yellow</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color5" id="color5">
                                <label for="color5">White</label>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked" name="color6" id="color6">
                                <label for="color6">Green</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color7" id="color7">
                                <label for="color7">Multi</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color8" id="color8">
                                <label for="color8">Purple</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color9" id="color9">
                                <label for="color9">Gold</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color10" id="color10">
                                <label for="color10">Orange</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- //Binding -->
                <!-- discounts -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">Discount</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked" name="dis1" id="dis1">
                            <label for="dis1">5% - 20%</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="dis2" id="dis2">
                            <label for="dis2">20% - 40%</label>
                        </li>
                        <li>
                            <input type="checkbox" class="dis3" name="dis3" id="dis3">
                            <label for="dis3">40% - 60%</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="dis4" id="dis4">
                            <label for="dis4">60% or more</label>
                        </li>
                    </ul>
                </div>
                <!-- //discounts -->
                <!-- reviews -->
                <div class="customer-rev left-side">
                    <h3 class="shopf-sear-headits-sear-head">Customer Review</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>4.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>2.5</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //reviews -->
            </div>
            <!-- //grid left -->
            <!-- grid right -->
            <div class="col-lg-9 mt-lg-0 mt-5 right-product-grid">
                <!-- card group  -->
                <div class="card-group">
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf1.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Self Design Women's Tunic</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$28.00</p>
                                    <p class="line-through">$35.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Self Design Women's Tunic">
                                    <input type="hidden" name="amount" value="28.00">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf2.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Embroidered Women's Tunic</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$24.99</p>
                                    <p class="line-through">$29.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Embroidered Women's Tunic">
                                    <input type="hidden" name="amount" value="24.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf3.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Sleeveless Women's Top</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$20.99</p>
                                    <p class="line-through">$26.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Sleeveless Women's Top">
                                    <input type="hidden" name="amount" value="20.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf4.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Popnetic Casual Full Sleeve Top</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$14.99</p>
                                    <p class="line-through">$19.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Popnetic Casual Full Sleeve Top">
                                    <input type="hidden" name="amount" value="14.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- //row  -->
                </div>
                <!-- //card group 1-->
                <!-- card group 2 -->
                <div class="card-group my-5">
                    <!-- row2 -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3 out_w3">
                            <div class="men-thumb-item position-relative">
                                <img src="{{ asset('template') }}/images/pf7.jpg" alt="img" class="card-img-top">
                                <span class="px-2 position-absolute">out of stock</span>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Moderno Solid Women's Tunic</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$27.00</p>
                                    <p class="line-through">$35.00</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf5.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Casual 3/4th Sleeve Yellow Top</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$24.00</p>
                                    <p class="line-through">$30.00</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Casual 3/4th Sleeve Yellow Top">
                                    <input type="hidden" name="amount" value="24.00">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf6.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Casual polo Women's T-shirt</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$13.00</p>
                                    <p class="line-through">$20.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Blue Wedding Formal Blazer">
                                    <input type="hidden" name="amount" value="13.00">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf8.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Casual 3/4th Sleeve Top</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$19.00</p>
                                    <p class="line-through">$24.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Casual 3/4th Sleeve Top">
                                    <input type="hidden" name="amount" value="19.00">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- //card 2 -->
                </div>
                <!-- //card group -->
                <!-- card group  -->
                <div class="card-group">
                    <!-- row1-->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf9.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Slim Women's Blue Jeans</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$19.99</p>
                                    <p class="line-through">$24.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Men's Hooded Blue T-Shirt">
                                    <input type="hidden" name="amount" value="19.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf10.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Slim Women's Black Jeans</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$24.99</p>
                                    <p class="line-through">$32.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Slim Women's Black Jeans">
                                    <input type="hidden" name="amount" value="24.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf11.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Slim Women's Blue Jeans</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$14.99</p>
                                    <p class="line-through">$18.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Slim Women's Blue Jeans">
                                    <input type="hidden" name="amount" value="14.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf12.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Slim Women's Blue Jeans</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$16.99</p>
                                    <p class="line-through">$24.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Slim Women's Black Jeans">
                                    <input type="hidden" name="amount" value="16.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- //row  -->
                </div>
                <!-- //card group -->
                <!-- card group  -->
                <div class="card-group">
                    <!-- row1-->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf13.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Slim Women's Black Jeans</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$16.99</p>
                                    <p class="line-through">$20.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Slim Women's Black Jeans">
                                    <input type="hidden" name="amount" value="16.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf14.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Slim Light Blue Jeans</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$20.99</p>
                                    <p class="line-through">$31.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Slim Light Blue Jeans">
                                    <input type="hidden" name="amount" value="20.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf15.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">SlimLight Dark Blue Jeans</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$12.99</p>
                                    <p class="line-through">$18.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="SlimLight Dark Blue Jeans">
                                    <input type="hidden" name="amount" value="12.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- card -->
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{ asset('template') }}/images/pf16.jpg" alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/womens" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Slim Women's Beige Jeans</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$14.99</p>
                                    <p class="line-through">$18.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Slim Women's Beige Jeans">
                                    <input type="hidden" name="amount" value="14.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    <!-- //row  -->
                </div>
                <!-- //card group -->
            </div>
        </div>
    </div>
</div>
<!--// Shop -->
@endsection