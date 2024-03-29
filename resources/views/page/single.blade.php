@extends('layout.master')

@section('title', 'Single')

@section('content')

@include('layout.banner')

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Single Page</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<section class="single_blog_wthree py-5">
    <div class="container">
        <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>Single</span> Page</h5>
        <div class="single-page-agile-info">
            <!-- /movie-browse-agile -->
            <div class="row show-top-grids">
                <div class="col-md-7 single-left">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Blog Title</h5>
                            <p class="card-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget
                                felis porttitor volutpat. Proin eget tortor risus. Curabitur non nulla sit amet nisl
                                tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec,
                                egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat..</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        <img class="card-img-bottom" src="{{ asset('template') }}/images/blg1.jpg" alt="Card image cap">
                    </div>
                    <div class="song-grid-right">
                        <div class="share">
                            <h5>Share this</h5>
                            <div class="single-agile-shar-buttons">
                                <ul>
                                    <li>
                                        <div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like"
                                            data-size="small" data-show-faces="false" data-share="false" fb-xfbml-state="rendered"
                                            fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;layout=button_count&amp;locale=en_GB&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small">
                                            <span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;">
                                                <iframe name="f2d4069dd7c5844" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true"
                                                    scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.7/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FXBwzv5Yrm_1.js%3Fversion%3D42%23cb%3Df9ea263d24bf8%26domain%3Dp.w3layouts.com%26origin%3Dhttps%253A%252F%252Fp.w3layouts.com%252Ff16922fe3409b58%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;layout=button_count&amp;locale=en_GB&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small"
                                                    style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe>
                                            </span>
                                        </div>
                                        <script>
                                            (function (d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src =
                                                    "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                        </script>
                                    </li>
                                    <li>
                                        <div class="fb-share-button fb_iframe_widget" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small"
                                            data-mobile-iframe="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=31&amp;href=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;layout=button_count&amp;locale=en_GB&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small">
                                            <span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;">
                                                <iframe name="fb1666b41482e8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true"
                                                    scrolling="no" title="fb:share_button Facebook Social Plugin" src="https://www.facebook.com/v2.7/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FXBwzv5Yrm_1.js%3Fversion%3D42%23cb%3Df2ea1c68c434c8c%26domain%3Dp.w3layouts.com%26origin%3Dhttps%253A%252F%252Fp.w3layouts.com%252Ff16922fe3409b58%26relation%3Dparent.parent&amp;container_width=31&amp;href=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;layout=button_count&amp;locale=en_GB&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small"
                                                    style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="news-twitter">
                                        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered"
                                            title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.85cf65311617c356fe9237c3e6c10afb.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=w3layouts&amp;show_count=false&amp;show_screen_name=true&amp;size=m&amp;time=1502102422605"
                                            style="position: static; visibility: visible; width: 126px; height: 20px;" data-screen-name="w3layouts"></iframe>
                                        <script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li>
                                        <iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-mention-button twitter-mention-button-rendered twitter-tweet-button"
                                            title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.85cf65311617c356fe9237c3e6c10afb.en.html#dnt=false&amp;id=twitter-widget-1&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Faug-2016%2F24-08-2016%2Fone_movies%2Fweb%2Fsingle.html&amp;screen_name=w3layouts&amp;size=m&amp;time=1502102422608&amp;type=mention"
                                            style="position: static; visibility: visible; width: 136px; height: 20px;" data-screen-name="w3layouts"></iframe>
                                        <script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li>
                                        <!-- Place this tag where you want the +1 button to render. -->
                                        <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px;">
                                            <iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;"
                                                tabindex="0" vspace="0" width="100%" id="I1_1502102853328" name="I1_1502102853328"
                                                src="https://apis.google.com/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=https%3A%2F%2Fp.w3layouts.com&amp;url=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Faug-2016%2F24-08-2016%2Fone_movies%2Fweb%2Fsingle.html&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.xh47SggJVmI.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCNnAKKXzFeIiJTiMA4Bq29frxjzuA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I1_1502102853328&amp;parent=https%3A%2F%2Fp.w3layouts.com&amp;pfname=&amp;rpctoken=33261381"
                                                data-gapiattached="true" title="G+"></iframe>
                                        </div>

                                        <!-- Place this tag after the last +1 button tag. -->
                                        <script type="text/javascript">
                                            (function () {
                                                var po = document.createElement('script');
                                                po.type = 'text/javascript';
                                                po.async = true;
                                                po.src = 'https://apis.google.com/js/platform.js';
                                                var s = document.getElementsByTagName('script')[0];
                                                s.parentNode.insertBefore(po, s);
                                            })();
                                        </script>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="all-comments p-sm-5 p-3 mt-5">
                        <div class="wthree-form-left">
                            <!-- contact form grid -->
                            <div class="contact-top1">
                                <h5 class="text-dark mb-4 text-capitalize">send us a note</h5>
                                <form action="#" method="get" class="f-color">
                                    <div class="form-group">
                                        <label for="contactusername">Name</label>
                                        <input type="text" class="form-control" id="contactusername" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="contactemail">Email</label>
                                        <input type="email" class="form-control" id="contactemail" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="contactcomment">Your Message</label>
                                        <textarea class="form-control" rows="5" id="contactcomment" required=""></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                                </form>
                            </div>
                            <!--  //contact form grid ends here -->
                        </div>
                        <div class="media py-5">
                            <img class="mr-3" src="{{ asset('template') }}/images/m.png" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Michael</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                vulputate at, tempus viverra turpis.</p>
                                <div class="media mt-5">
                                    <a class="pr-3" href="#">
                                        <img src="{{ asset('template') }}/images/f.png" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0">James</h5>
                                       <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                        vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                        fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <img class="mr-3" src="{{ asset('template') }}/images/m.png" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Jack</h5>
                               <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                vulputate at, tempus viverra turpis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Search Widget -->
                    <div class="card mb-4">
                        <h5 class="card-header">Search</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Categories Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Categories</h5>
                        <div class="card-body">
                            <div class="row">
                                <ul class="w3-tag2">
                                    <li>
                                        <a href="/shop">amet</a>
                                    </li>
                                    <li>
                                        <a href="#">placerat</a>
                                    </li>
                                    <li>
                                        <a href="/shop">Proin </a>
                                    </li>
                                    <li>
                                        <a href="#">vehicula</a>
                                    </li>
                                    <li>
                                        <a href="#">vehicula</a>
                                    </li>
                                    <li>
                                        <a href="/shop">diam</a>
                                    </li>
                                    <li>
                                        <a href="/shop">amet</a>
                                    </li>
                                    <li>
                                        <a href="#">placerat</a>
                                    </li>
                                    <li>
                                        <a href="/shop">Proin </a>
                                    </li>
                                    <li>
                                        <a href="#">vehicula</a>
                                    </li>
                                    <li>
                                        <a href="#">vehicula</a>
                                    </li>
                                    <li>
                                        <a href="/shop">velit</a>
                                    </li>
                                    <li>
                                        <a href="/shop">felis</a>
                                    </li>
                                    <li>
                                        <a href="/comedy">mauris</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Side Widget</h5>
                        <div class="card-body">
                            Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat. Proin
                            eget tortor risus.Curabitur non nulla sit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //blog-->

@endsection