@extends('layout.master')

@section('title', 'Blog')

@section('content')

@include('layout.banner')

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Blog</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<section class="blog_wthree py-5">
    <div class="container">
        <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>B</span>log</h5>
        <!-- blog row -->
        <div class="row card-columns py-lg-5">
            <div class="col-md-4 p-0">
                <div class="card">
                    <a href="/single">
                        <img class="card-img-top" src="{{ asset('template') }}/images/blg1.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title blg_w3ls">
                            <a href="/single">Blog Title</a>
                        </h5>
                        <p class="card-text">Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum
                            ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </div>
                </div>
                <div class="card">
                    <a href="/single">
                        <img class="card-img-top" src="{{ asset('template') }}/images/a2.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title blg_w3ls">
                            <a href="/single">Blog Title</a>
                        </h5>
                        <p class="card-text">Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title blg_w3ls">
                            <a href="/single">Blog Title</a>
                        </h5>
                        <p class="card-text">Donec sollicitudin molestie malesuada. Proin eget tortor risus..
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
                <div class="card text-white text-center">
                    <a href="/single">
                        <img class="card-img" src="{{ asset('template') }}/images/a3.jpg" alt="Card image">
                    </a>
                    <div class="card text-center p-3">
                        <blockquote class="blockquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                            <footer class="blockquote-footer">
                                <small>
                                    Someone famous in
                                    <cite title="Source Title">Source Title</cite>
                                </small>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title blg_w3ls">
                            <a href="/single">Blog Title</a>
                        </h5>
                        <p class="card-text">TDonec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum
                            ac diam sit.
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="card">
                    <a href="/single">
                        <img class="card-img" src="{{ asset('template') }}/images/blg2.jpg" alt="Card image">
                    </a>
                </div>
                <div class="card p-3 text-right">
                    <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                                Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title blg_w3ls">
                            <a href="/single">Blog Title</a>
                        </h5>
                        <p class="card-text">Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum
                            ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                    <a href="/single">
                        <img class="card-img-top" src="{{ asset('template') }}/images/i10.jpg" alt="Card image cap">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //blog row -->

@endsection