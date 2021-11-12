@extends('layout.master')

@section('title', 'Shop')

@section('content')

@include('layout.banner')

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- Shop -->
<div class="innerf-pages section">
    <div class="container">
        <!-- grid right -->
        <div class="py-sm-5 py-3 right-product-grid">
            <!-- card group 2 -->
            <h5 class="shop_w3 text-capitalize">
                Men's Collection</h5>
            <div class="row card-group my-sm-5 mt-5">
                <!-- row2 -->
                <!-- card -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src="{{ asset('template') }}/images/pm11.jpg" alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="/mens" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Black Casual Men's Blazer</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">$20.00</p>
                                <p class="line-through">$25.00</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Black Casual Men's Blazer">
                                <input type="hidden" name="amount" value="20.00">
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
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src="{{ asset('template') }}/images/pm12.jpg" alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="/mens" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Blue Wedding Formal Blazer</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">$35.00</p>
                                <p class="line-through">$44.99</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Blue Wedding Formal Blazer">
                                <input type="hidden" name="amount" value="35.00">
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
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src="{{ asset('template') }}/images/pm13.jpg" alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="/mens" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Blue Casual Men's Blazer</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">$29.99</p>
                                <p class="line-through">$34.99</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Casual Men's Blazer">
                                <input type="hidden" name="amount" value="29.00">
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card py-sm-5 border-0">
                        <a class="btn-lg btn-secondary text-center m-5" href="/men">View More</a>
                    </div>
                </div>
                <!-- //card 2 -->
            </div>
            <!-- //card group -->

            <!-- card group 2 -->
            <h5 class="shop_w3 text-capitalize">
                Women's Collection</h5>
            <div class="row card-group my-sm-5 mt-5">
                <!-- row2 -->
                <!-- card -->
                <div class="col-lg-3 col-sm-6">
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
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
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
                <!-- card -->
                <div class="col-lg-3 col-sm-6  mt-lg-0 mt-5">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="card py-sm-5 border-0">
                        <a class="btn-lg btn-secondary text-center m-5" href="/women">View More</a>
                    </div>
                </div>
                <!-- //card 2 -->
            </div>
            <!-- //card group -->

            <!-- card group 2 -->
            <h5 class="shop_w3 text-capitalize">
                Girl's Collection</h5>
            <div class="card-group my-sm-5 mt-5">
                <!-- row2 -->
                <!-- card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src="{{ asset('template') }}/images/pg4.jpg" alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="/girls" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Girl's Full Length Party Dress </h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">$20.00</p>
                                <p class="line-through">$35.00</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Full Length Party Dress">
                                <input type="hidden" name="amount" value="20.00">
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
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src="{{ asset('template') }}/images/pg5.jpg" alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="/girls" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">$18.00</p>
                                <p class="line-through">$25.00</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                <input type="hidden" name="amount" value="18.00">
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
                <div class="col-lg-3 col-sm-6  mt-lg-0 mt-5">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src="{{ asset('template') }}/images/pg8.jpg" alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="/girls" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
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
                                <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="card py-sm-5 border-0">
                        <a class="btn-lg btn-secondary text-center m-5" href="/girl">View More</a>
                    </div>
                </div>
            </div>
            <!-- //card group -->
            <!-- card group  -->
            <h5 class="row shop_w3 text-capitalize">
                Boy's Collection</h5>
            <div class="card-group my-5">
                <!-- row1-->
                <!-- card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src="{{ asset('template') }}/images/pb9.jpg" alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="/boys" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Festive Kurta And Pyjama Set</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">$18.00</p>
                                <p class="line-through">$25.00</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Festive Kurta And Pyjama Set">
                                <input type="hidden" name="amount" value="18.00">
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
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src="{{ asset('template') }}/images/pb10.jpg" alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="/boys" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Party Shirt and Trouser Set</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">$30.99</p>
                                <p class="line-through">$45.99</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Party Shirt and Trouser Set">
                                <input type="hidden" name="amount" value="30.99">
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
                <div class="col-lg-3 col-sm-6  mt-lg-0 mt-5">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src="{{ asset('template') }}/images/pb1.jpg" alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="/boys" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Shirt, Waistcoat And Pant Set</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">$14.99</p>
                                <p class="line-through">$24.99</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Shirt, Waistcoat And Pant Set">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="card py-sm-5 border-0">
                        <a class="btn-lg btn-secondary text-center m-5" href="/boy">View More</a>
                    </div>
                    <!-- //row  -->
                </div>
            </div>
            <!-- //card group -->

        </div>
    </div>
</div>
<!--// Shop -->

@endsection