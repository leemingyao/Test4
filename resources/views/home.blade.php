@extends('layout')
@section('meta')

<title>{!!$config["company_name"]!!} || One Stop Logistic Solution</title>
<meta property="og:description" content="We are pest control solution provider serving in Johor area - Sepcialized in Termites Elimination. Free Inspection + 100% Money Back Guarantee" />
<meta name='description' content='We are pest control solution provider serving in Johor area - Sepcialized in Termites Elimination. Free Inspection + 100% Money Back Guarantee' />
<meta name='keywords' content='propestsolution, propest, pest control, termite control' />
@endsection
@section('content')

<div id="fullpage">
    <div id="banner" class="block block-banner banner-main section section-fullheight section-banner">
        <div class="banner-list">
            <div class="banner-item banner-1 w-100 ml-0" style="background: linear-gradient(rgba(93,81,47,0),rgba(0,0,0,0)),url(../img/banner1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;">
                <div class="banner-item-inner">
                    <div class="banner-content mb-5">
                        <div class="m-5">
                            <h2 class="kf1 m-0"><span class="bg-light text-primary">LOGISTIC SPECIALIST <i class="fa-solid fa-thumbs-up"></i> </span></h2>
                            <h1 class="kf2">WITH OVER</h1>
                            <h1 class="kf3"><mark class="text-primary bg-light">10 YEARS </mark>OF</h1>
                            <h1 class="kf4">EXPERIENCE</h1>
                            <div class="kf5"><a href="tel:{!!$config["contact"]["office"]!!}" class="btn btn-secondary font-weight-bold"><i class="fa-solid fa-phone"></i> Call Us Now: {!!$config["contact"]["office"]!!}</a></div>
                        </div>
                    </div>
                    <a href="/contactus">
                        <div class="banner-bottom d-flex justify-content-around w-100">
                            <div class="d-flex align-items-center justify-content-center">
                                <h3>Lorem Ipsum</h3>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <h3>Lorem Ipsum</h3>
                            </div>                        
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    
    <div class="section-aboutus">
        <div class="row w-100 h-100">
            <div class="col-6 img-container">
                
            </div>
            <div class="col-6 gap">
                <div class="row p-3">
                    <div class="col-12">
                        <h2 class="text-primary font-weight-bold ">About Us</h2>
                    </div>
                    <div class="col-12">
                        <p class="text-primary">
                            Curabitur et urna volutpat, consequat justo at, tempus diam. Mauris sit amet porttitor magna. </br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        </p>
                        <br>
                        <a class="float-right" href='/aboutus'>Read More ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-services">
        <div class="overlay"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="text-primary font-weight-bold">Our Services</h2>
                </div>
                <div class="col-12">
                    <p class="d-flex justify-content-center text-primary font-weight-bold">
                        Curabitur et urna volutpat, consequat justo at, tempus diam. Mauris sit amet porttitor magna. </br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    </p>
                </div>
            </div>
            <div class="row service-container">
                <a href="/services" class="service-type service1 mx-2 my-2 col-12 col-md-5 col-lg-2">
                    <div class="textcontainer">
                        <h5>
                            SEA FREIGHT </br>
                            IMPORT & EXPORT
                        </h5>
                    </div>
                    <div class="overlay"></div>
                </a>
                <a href="/services" class="service-type service2 mx-2 my-2 col-12 col-md-5 col-lg-2">
                    <div class="textcontainer">
                        <h5>
                            AIR FREIGHT </br>
                            IMPORT & EXPORT
                        </h5>
                    </div>
                    <div class="overlay"></div>
                </a>
                <a href="/services" class="service-type service3 mx-2 my-2 col-12 col-md-5 col-lg-2">
                    <div class="textcontainer">
                        <h5>
                            LAND 
                            TRANSPORT </br>
                            SERVICES
                        </h5>
                    </div>
                    <div class="overlay"></div>
                </a>
                <a href="/services" class="service-type service4 mx-2 my-2 col-12 col-md-5 col-lg-2">
                    <div class="textcontainer">
                        <h5>
                            SHIPPING COST ESTIMATION 
                        </h5>
                    </div>
                    <div class="overlay"></div>
                </a>
            </div>
        </div>
    </div>

    <div class="section-news">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="text-primary font-weight-bold">Global News</h2>
                </div>
                <div class="col-12">
                    <p class="d-flex justify-content-center text-primary font-weight-bold">
                        Curabitur et urna volutpat, consequat justo at, tempus diam. Mauris sit amet porttitor magna. </br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    </p>
                </div>
            </div>
            

            <div id="container">
                <div class="row slick-class">
                    <card></card>
                </div>
            </div>
            
            <script type="text/x-template" id="blog-card">
                <a class="card-link col-12 col-md-3" href="/news">
                    <article class="blog-card">
                        <img class="post-image" :src="image" />
                        <div class="article-details">
                            <h4 class="post-category">@{{ content }}</h4>
                            <h3 class="post-title">@{{ name }}</h3>
                            <p class="post-description">@{{ desc }}</p>
                            <p class="post-author">By @{{ author }}</p>
                        </div>
                    </article>
                </a>
                <a class="card-link col-12 col-md-3" href="/news">
                    <article class="blog-card">
                        <img class="post-image" :src="image" />
                        <div class="article-details">
                            <h4 class="post-category">@{{ content }}</h4>
                            <h3 class="post-title">@{{ name }}</h3>
                            <p class="post-description">@{{ desc }}</p>
                            <p class="post-author">By @{{ author }}</p>
                        </div>
                    </article>
                </a>
                <a class="card-link col-12 col-md-3" href="/news">
                    <article class="blog-card">
                        <img class="post-image" :src="image" />
                        <div class="article-details">
                            <h4 class="post-category">@{{ content }}</h4>
                            <h3 class="post-title">@{{ name }}</h3>
                            <p class="post-description">@{{ desc }}</p>
                            <p class="post-author">By @{{ author }}</p>
                        </div>
                    </article>
                </a>
                <a class="card-link col-12 col-md-3" href="/news">
                    <article class="blog-card">
                        <img class="post-image" :src="image" />
                        <div class="article-details">
                            <h4 class="post-category">@{{ content }}</h4>
                            <h3 class="post-title">@{{ name }}</h3>
                            <p class="post-description">@{{ desc }}</p>
                            <p class="post-author">By @{{ author }}</p>
                        </div>
                    </article>
                </a>
                <a class="card-link col-12 col-md-3" href="/news">
                    <article class="blog-card">
                        <img class="post-image" :src="image" />
                        <div class="article-details">
                            <h4 class="post-category">@{{ content }}</h4>
                            <h3 class="post-title">@{{ name }}</h3>
                            <p class="post-description">@{{ desc }}</p>
                            <p class="post-author">By @{{ author }}</p>
                        </div>
                    </article>
                </a>
                <a class="card-link col-12 col-md-3" href="/news">
                    <article class="blog-card">
                        <img class="post-image" :src="image" />
                        <div class="article-details">
                            <h4 class="post-category">@{{ content }}</h4>
                            <h3 class="post-title">@{{ name }}</h3>
                            <p class="post-description">@{{ desc }}</p>
                            <p class="post-author">By @{{ author }}</p>
                        </div>
                    </article>
                </a>
                <a class="card-link col-12 col-md-3" href="/news">
                    <article class="blog-card">
                        <img class="post-image" :src="image" />
                        <div class="article-details">
                            <h4 class="post-category">@{{ content }}</h4>
                            <h3 class="post-title">@{{ name }}</h3>
                            <p class="post-description">@{{ desc }}</p>
                            <p class="post-author">By @{{ author }}</p>
                        </div>
                    </article>
                </a>
            </script>
        </div>
    </div>
    

    <div class="engaging-customer">
        <div class="overlay"></div>
        @include('partial.engaging')
    </div>
</div>


@endsection
@section('custom_style')
<style>

</style>
@endsection
@section('javascript')

<script>

var InitSectionHeight = function(){
    var height = $(window).height();
    $(".section-fullheight").css('height',height + 'px');
}
var findBootstrapEnvironment = function () {
    let envs = ['xs', 'sm', 'md', 'lg', 'xl'];

    let el = document.createElement('div');
    document.body.appendChild(el);

    let curEnv = envs.shift();

    for (let env of envs.reverse()) {
        el.classList.add(`d-${env}-none`);

        if (window.getComputedStyle(el).display === 'none') {
            curEnv = env;
            break;
        }
    }

    document.body.removeChild(el);
    return curEnv;
}
var InitClientSlick = function(){
    var env = findBootstrapEnvironment();
    if (env == 'xs' || env == 'sm')
    {
        $(".client-list").not('.slick-initialized').slick({
            infinite: true,
            slidesToShow: 9,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive:[
                {
                    breakpoint: 789,
                    settings:{
                        slidesToShow: 3,
                    }
                }
            ]
        });
    }
    else
    {
        $(".client-list").not('.slick-initialized').slick()
        $(".client-list").slick('unslick');
    }
}

$(function(){
    InitSectionHeight();
    InitClientSlick();

    $(window).resize(function(){    
        InitSectionHeight();
        InitClientSlick();
    })
    
    
    $(".banner-list").slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        arrows: false, 
        fade: true,
        speed:1000,
        slidesToShow: 1,
        pauseOnHover:false,
    });
})
</script>
@endsection