@extends('layout')
@section('meta')

<title>Pest Control Specialist In Johor Bahru</title>
<meta property="og:description" content="We are pest control solution provider serving in Johor area - Sepcialized in Termites Elimination. Free Inspection + 100% Money Back Guarantee" />
<meta name='description' content='We are pest control solution provider serving in Johor area - Sepcialized in Termites Elimination. Free Inspection + 100% Money Back Guarantee' />
<meta name='keywords' content='propestsolution, propest, pest control, termite control' />
@endsection
@section('content')
<div id="fullpage">
    <div id="banner" class="block block-banner banner-main section section-fullheight section-banner">
        <div class="banner-list">
            <div class="banner-item banner-1" style="background: linear-gradient(rgba(93,81,47,0.6),rgba(0,0,0,0.6)),url(../img/home_banner-1.png);background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;">
                <div class="banner-item-inner">
                    <div class="banner-content mb-5">
                        <div class="m-5">
                            <h2 class="kf1 m-0"><span class="bg-dark text-white">PEST CONTROL SPECIALIST</span></h2>
                            <h1 class="kf2">WITH OVER</h1>
                            <h1 class="kf3"><mark>10 YEARS</mark> OF</h1>
                            <h1 class="kf4">EXPERIENCE</h1>
                            <div class="kf5"><a href="tel:{!!$config["contact"]["fax"]!!}" class="btn btn-secondary font-weight-bold"><i class="fas fa-phone-alt pr-1"></i> Call Us Now: {!!$config["contact"]["fax"]!!}</a></div>
                        </div>
                    </div>
                    <a href="/contact-us">
                        <div class="banner-bottom d-flex justify-content-around w-100">
                            <div class="d-flex align-items-center justify-content-center">
                                <h3>FREE INSPECTION</h3>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <h3>100% MONEY BACK GUARANTEE</h3>
                            </div>                        
                        </div>
                    </a>
                </div>
            </div>
        </div>
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