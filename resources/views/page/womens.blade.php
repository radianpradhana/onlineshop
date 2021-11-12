@extends('layout.master')

@section('title', 'Womens')

@section('content')

@include('layout.banner')

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/women">Women's Clothing</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Single Product</li>
    </ol>
</nav>
<!-- //breadcrumbs -->


<!-- Single -->
<div class="innerf-pages section py-5">
    <div class="container">
        <div class="row my-sm-5">
            <div class="col-lg-4 single-right-left">
                <div class="grid images_3_of_2">
                    <div class="flexslider1">
                        <ul class="slides">
                            <li data-thumb="{{asset('template')}}/images/mff1.jpg">
                                <div class="thumb-image">
                                    <img src="{{asset('template')}}/images/mff1.jpg" data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                            <li data-thumb="{{asset('template')}}/images/mff2.jpg">
                                <div class="thumb-image">
                                    <img src="{{asset('template')}}/images/mff2.jpg" data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                            <li data-thumb="{{asset('template')}}/images/mff3.jpg">
                                <div class="thumb-image">
                                    <img src="{{asset('template')}}/images/mff3.jpg" data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                <h3>Harpa Casual 3/4th Sleeve Floral Print Women's Multicolor Top
                </h3>
                <div class="caption">

                    <ul class="rating-single">
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                    <h6>
                        $18.00</h6>
                </div>
                <div class="desc_single">
                    <h5>Description</h5>
                    <p>Pellentesque quis orci sapien. Phasellus at pfero in nunc egestas tincidunt. In dictum arcu purus, ultricies
                        tincidunt urna vehicula at. Aenean iaculis urna nec pfero scelerisque, ac ullamcorper neque porta.</p>
                </div>
                <div class="d-sm-flex justify-content-between">
                    <div class="occasional">
                        <h5 class="sp_title mb-3">Highlights</h5>
                        <ul class="single_specific">
                            <li>
                                <span>Round Neck </span> 3/4th Sleeve</li>
                            <li> Fabric:
                                <span>Polyester</span>
                                <li> Pattern
                                    <span>Floral Print </span>
                                </li>

                        </ul>

                    </div>
                    <div class="color-quality mt-sm-0 mt-4">
                        <h5 class="sp_title mb-3">services</h5>
                        <ul class="single_serv">
                            <li>
                                <a href="#">30 Day Return Policy</a>
                            </li>
                            <li class="mt-2">
                                <a href="#">Cash on Delivery available</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="description">
                    <h5>Check delivery, payment options and charges at your location</h5>
                    <form action="#" method="post">
                        <input type="text" placeholder="Enter pincode" required>
                        <input type="submit" value="Check">
                    </form>
                </div>
                <div class="occasion-cart">
                    <div class="chr single-item single_page_b">
                        <form action="#" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value="Floral Print Women's Top">
                            <input type="hidden" name="amount" value="18.00">
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /new_arrivals -->
<div class="section singlep_btm pb-5">
    <div class="container">
        <div class="new_arrivals">
            <h4 class="rad-txt text-capitalize">you may also be interested in
            </h4>
            <div class="card-group my-5">
                <!-- card -->
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <img src="{{asset('template')}}/images/pf1.jpg" alt="img" class="card-img-top">
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
                <!-- //card -->
                <!-- card -->
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <img src="{{asset('template')}}/images/pf2.jpg" alt="img" class="card-img-top">
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
                <!-- //card -->
                <!-- card -->
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <img src="{{asset('template')}}/images/pf3.jpg" alt="img" class="card-img-top">
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
                <!-- //card -->
                <!-- card -->
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <img src="{{asset('template')}}/images/pf4.jpg" alt="img" class="card-img-top">
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
                <!-- //card -->
                <!-- //row  -->
            </div>
            <!--//new_arrivals-->
        </div>
    </div>
</div>
<!--// Single -->

@endsection