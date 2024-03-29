@extends('layout.master')

@section('title', 'Payment')

@section('content')

@include('layout.banner')

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Payment</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!--Payment-->
<section class="payment_w3ls py-5">
    <div class="container">
        <div class="privacy about">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>P</span>ayment Details</h5>
            <!--/tabs-->
            <div class="responsive_tabs innfpage-tabs">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Cash on delivery (COD)</li>
                        <li>Credit/Debit</li>
                        <li>Net Banking</li>
                        <li>Paypal Account</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">
                            <div class="pay_info">
                                <div class="vertical_post check_box_fpay">
                                    <h5>COD - Now Available</h5>
                                    <div class="checkbox">
                                        <div class="check_box_one cashon_delivery">
                                            <label class="anim">
                                                <input type="checkbox" class="checkbox position-relative">
                                                <span> We also accept Credit/Debit card on delivery. Please Check with the agent.</span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//tab_one-->
                        <div class="tab2">
                            <div class="pay_info">
                                <form action="#" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                                    <section class="creditly-wrapper payf_wrapper">
                                        <div class="credit-card-wrapper">
                                            <div class="first-row form-group">
                                                <div class="controls">
                                                    <label class="control-label">Name on Card</label>
                                                    <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                                </div>
                                                <div class="paymntf_card_number_grids">
                                                    <div class="fpay_card_number_grid_left">
                                                        <div class="controls">
                                                            <label class="control-label">Card Number</label>
                                                            <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                                autocompletetype="cc-number" x-autocompletetype="cc-number"
                                                                placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                        </div>
                                                    </div>
                                                    <div class="fpay_card_number_grid_right">
                                                        <div class="controls">
                                                            <label class="control-label">CVV</label>
                                                            <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                        </div>
                                                    </div>
                                                    <div class="clear"> </div>
                                                </div>
                                                <div class="controls">
                                                    <label class="control-label">Expiration Date</label>
                                                    <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                </div>
                                            </div>
                                            <input class="btn btn-primary submit" type="submit" value="Make Payment">
                                        </div>
                                    </section>
                                </form>

                            </div>
                        </div>
                        <div class="tab3">

                            <div class="pay_info">
                                <div class="vertical_post">
                                    <form action="#" method="post">
                                        <h5>Select From Popular Banks</h5>
                                        <div class="swit-radio">
                                            <div class="check_box_one">
                                                <div class="radio_one">
                                                    <label>
                                                        <input type="radio" name="radio" checked="">
                                                        <i></i>Syndicate Bank</label>
                                                </div>
                                            </div>
                                            <div class="check_box_one">
                                                <div class="radio_one">
                                                    <label>
                                                        <input type="radio" name="radio">
                                                        <i></i>Bank of Baroda</label>
                                                </div>
                                            </div>
                                            <div class="check_box_one">
                                                <div class="radio_one">
                                                    <label>
                                                        <input type="radio" name="radio">
                                                        <i></i>Canara Bank</label>
                                                </div>
                                            </div>
                                            <div class="check_box_one">
                                                <div class="radio_one">
                                                    <label>
                                                        <input type="radio" name="radio">
                                                        <i></i>ICICI Bank</label>
                                                </div>
                                            </div>
                                            <div class="check_box_one">
                                                <div class="radio_one">
                                                    <label>
                                                        <input type="radio" name="radio">
                                                        <i></i>State Bank Of India</label>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <h5> select other bank</h5>
                                        <div class="section_room_pay">
                                            <select class="year">
                                                <option value="">=== Other Banks ===</option>
                                                <option value="ALB-NA">Allahabad Bank NetBanking</option>
                                                <option value="ADB-NA">Andhra Bank</option>
                                                <option value="BBK-NA">Bank of Bahrain and Kuwait NetBanking</option>
                                                <option value="BBC-NA">Bank of Baroda Corporate NetBanking</option>
                                                <option value="BBR-NA">Bank of Baroda Retail NetBanking</option>
                                                <option value="BOI-NA">Bank of India NetBanking</option>
                                                <option value="BOM-NA">Bank of Maharashtra NetBanking</option>
                                                <option value="CSB-NA">Catholic Syrian Bank NetBanking</option>
                                                <option value="CBI-NA">Central Bank of India</option>
                                                <option value="CUB-NA">City Union Bank NetBanking</option>
                                                <option value="CRP-NA">Corporation Bank</option>
                                                <option value="DBK-NA">Deutsche Bank NetBanking</option>
                                                <option value="DCB-NA">Development Credit Bank</option>
                                                <option value="DC2-NA">Development Credit Bank - Corporate</option>
                                                <option value="DLB-NA">Dhanlaxmi Bank NetBanking</option>
                                                <option value="FBK-NA">Federal Bank NetBanking</option>
                                                <option value="IDS-NA">Indusind Bank NetBanking</option>
                                                <option value="IOB-NA">Indian Overseas Bank</option>
                                                <option value="ING-NA">ING Vysya Bank (now Kotak)</option>
                                                <option value="JKB-NA">Jammu and Kashmir NetBanking</option>
                                                <option value="JSB-NA">Janata Sahakari Bank Limited</option>
                                                <option value="KBL-NA">Karnataka Bank NetBanking</option>
                                                <option value="KVB-NA">Karur Vysya Bank NetBanking</option>
                                                <option value="LVR-NA">Lakshmi Vilas Bank NetBanking</option>
                                                <option value="OBC-NA">Oriental Bank of Commerce NetBanking</option>
                                                <option value="CPN-NA">PNB Corporate NetBanking</option>
                                                <option value="PNB-NA">PNB NetBanking</option>
                                                <option value="RSD-DIRECT">Rajasthan State Co-operative Bank-Debit Card</option>
                                                <option value="RBS-NA">RBS (The Royal Bank of Scotland)</option>
                                                <option value="SWB-NA">Saraswat Bank NetBanking</option>
                                                <option value="SBJ-NA">SB Bikaner and Jaipur NetBanking</option>
                                                <option value="SBH-NA">SB Hyderabad NetBanking</option>
                                                <option value="SBM-NA">SB Mysore NetBanking</option>
                                                <option value="SBT-NA">SB Travancore NetBanking</option>
                                                <option value="SVC-NA">Shamrao Vitthal Co-operative Bank</option>
                                                <option value="SIB-NA">South Indian Bank NetBanking</option>
                                                <option value="SBP-NA">State Bank of Patiala NetBanking</option>
                                                <option value="SYD-NA">Syndicate Bank NetBanking</option>
                                                <option value="TNC-NA">Tamil Nadu State Co-operative Bank NetBanking</option>
                                                <option value="UCO-NA">UCO Bank NetBanking</option>
                                                <option value="UBI-NA">Union Bank NetBanking</option>
                                                <option value="UNI-NA">United Bank of India NetBanking</option>
                                                <option value="VJB-NA">Vijaya Bank NetBanking</option>
                                            </select>
                                        </div>
                                        <input type="submit" value="Pay now">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab4">
                            <div class="pay_info">
                                <div class="row">
                                    <div class="col-md-6 tab-grid">
                                        <img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
                                        <p>Important: You will be redirected to PayPal's website to securely complete your
                                            payment.
                                        </p>
                                        <a href="#" class="btn btn-primary">Checkout via Paypal</a>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="#" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                                            <section class="creditly-wrapper payf_wrapper">
                                                <div class="credit-card-wrapper">
                                                    <div class="first-row form-group">
                                                        <div class="controls">
                                                            <label class="control-label">Card Holder </label>
                                                            <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                                        </div>
                                                        <div class="paymntf_card_number_grids">
                                                            <div class="fpay_card_number_grid_left">
                                                                <div class="controls">
                                                                    <label class="control-label">Card Number</label>
                                                                    <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                                        autocompletetype="cc-number" x-autocompletetype="cc-number"
                                                                        placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                                </div>
                                                            </div>
                                                            <div class="fpay_card_number_grid_right">
                                                                <div class="controls">
                                                                    <label class="control-label">CVV</label>
                                                                    <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                                </div>
                                                            </div>
                                                            <div class="clear"> </div>
                                                        </div>
                                                        <div class="controls">
                                                            <label class="control-label">Valid Thru</label>
                                                            <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                        </div>
                                                    </div>
                                                    <input class="btn btn-primary submit" type="submit" value="Proceed Payment">
                                                </div>
                                            </section>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//tabs-->
        </div>

    </div>
</section>
<!-- //payment -->

@endsection