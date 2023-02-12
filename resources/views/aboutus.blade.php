@extends('layout')
<title>About us | {{$config["company_name"]}}</title>
@section('content')
<div class="subpage-banner">
   <div class="subpage-banner-item" style="background:linear-gradient(rgba(255,255,255,0.9) , rgba(255,221,5,0.5)),url(/img/about-banner.png);
   background-repeat: no-repeat;
            background-size: cover;
            background-position: center;">
        <div class="sub-banner-content">
            <h1>ABOUT US</h1>
        </div>
   </div>
</div>
<div class="page-aboutus">
    <div class="section-text">
        <div class="container text-center">
            <h3 class="text-primary mb-3 font-weight-bold">"Pest Control Solution Provider"</h3>
            <p>
                <b>ProPest Solution</b> is a pest control solution provider with a reputation for exceptional customer service and effective results for our<br>
                pest management. Established in 2015, we are a team of pest control experts with Licensed Pesticide Applicator on board to delivery<br>
                quality services to our customers.
            </p>
            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/gov-certified.png" />
        </div>
    </div>
    <div class="section-excellence">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="offset-xl-2 offset-lg-0 col-xl-10 col-lg-12">
                            <div class="p-5 text-center">
                                <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/Section-excellence_01.png"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-justify excellence-content">
                    <div class="row">
                        <div class="col-lg-10">
                            <b>"Propelling Towards Excellence"</b> describes the essence of what the brand name
                            of ProPest Solution stands for. Our dedicated prople are driven to align actions
                            with top-notch solutions to protect the health and property of the local
                            community. <br><br>
                            With over 10 years of experience in this industry, we continuously
                            seek to upgrade our team competency and develop innovative solutions to bring
                            exceptional results for your pest challenges. At ProPest Solution, we believe in 
                            building our company culture around executional excellence where all customers
                            benefit from our trustworthy pest control solutions.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row excellence-content-2">
                <div class="col-12 col-lg-6 bg-primary py-5">
                    <div class="row">
                        <div class="offset-lg-3 offset-md-2 offset-0 col-lg-8 col-md-8 col-12 ">
                            Today, we have grown into an industry leader known for service excellence due
                            to word-of-mouth of our residential, commercial and even industrial customers 
                            in Johor area.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-10 text-justify">
                    <div class="p-5">
                        <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about-team.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-vision">
        <div class="container-fluid">
            <div class="row">
                <div class="vision-left col-md-12 col-lg-6">
                    <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about-family.jpg"/>
                </div>
                <div class="vision-right col-md-12 col-lg-6">
                    <div class="text-block text-center p-lg-5 p-3">
                        <div class="vision level-3">
                            <h5 class="font-weight-bold mb-3 pt-3">Company Vision</h5>
                            <div class="d-flex">
                                <div class="font-weight-bold quotebig">"</div>
                                <p class="px-2">
                                    To create a Comfortable and Carefree life for everyone
                                </p>
                                <div class="font-weight-bold quotebig">"</div>
                            </div>
                        </div>
                        <br>
                        <div class="mission level-3">
                            <h5 class="font-weight-bold mb-3 pt-3">Company Mission</h5>
                            <div class="d-flex px-3">
                                <div class="font-weight-bold quotebig">"</div>
                                <p class="">
                                    To fulfill our customers needs and pest problems by
                                    providing effective pest management solutions that
                                    comply with safety and environment regulations
                                </p>
                                <div class="font-weight-bold quotebig">"</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-whyus m-0">
        <div class="container text-center">
            <h2>Why Choose Us</h2>
            <div class="row">
                <div class="col-6 col-md-4">
                    <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/section_whyus_01.png"/>
                    <h5 class="font-weight-bold">FREE INSPECTION</h5>
                    <p>
                        Taking customers' satisfaction as our
                        top priority, we provide FREE ON-SITE 
                        INSPECTION for all existing and 
                        prospective customers in Johor at NO
                        EXTRA CHARGE, usually within 24
                        working hours
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/section_whyus_02.png"/>
                    <h5 class="font-weight-bold">FREE CONSULTATION</h5>
                    <p>
                        Our service experts ensure fast and 
                        efficient solutions for your pest issues.
                        We provide FREE CONSULTATION with
                        practical solutions to address your 
                        pest issues immediately after through
                        inspection
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/section_whyus_03.png"/>
                    <h5 class="font-weight-bold">EFFICIENT SERVICES</h5>
                    <p>
                        Our service procedure ensures efficient
                        delivery of quality service to our 
                        customers for long-term, sustainable
                        pest control results.
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/section_whyus_04.png"/>
                    <h5 class="font-weight-bold">24 HOURS ARRIVAL ON SITE</h5>
                    <p>
                        We provide complete protection for our 
                        customer by arriving on the site within
                        24 hours, so our customers do not
                        have to deal with pest problem any
                        longer than need to.
                    </p>
                    </div>
                <div class="col-6 col-md-4">
                    <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/section_whyus_05.png"/>
                    <h5 class="font-weight-bold">LICENSED SERVICE PROVIDER</h5>
                    <p>
                        We are proud member of Pest Control
                        Association of Malaysia (PCAM) and all
                        of our professional pest experts and
                        personal are well-trained and certified
                        under Jabatan Pertanian of Malaysia
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/section_whyus_06.png"/>
                    <h5 class="font-weight-bold">100% MONEY BACK GUARANTEE</h5>
                    <p>
                        Our professional pest experts suggest
                        and implement treatments tailored to
                        resolve your pest problems from the 
                        root cause. We provide 100% money
                        back guarantee if you are not satisfied
                        with our service
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-clients">
        <div class="container text-center">
            <h2>Our Clients</h2>
            <div class="client-list">
                <div class="row">
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_portrait_01.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_portrait_02.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_portrait_03.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_portrait_08.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_portrait_05.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_portrait_06.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_portrait_04.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_portrait_09.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_portrait_10.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_17.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_16.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_01.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_13.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_14.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_05.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_03.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item" style="background-color:green">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_09.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item bg-light small-logo">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_10.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="client-item bg-light small-logo">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_06.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 small-logo">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_15.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 small-logo">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_12.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 small-logo">
                        <div class="client-item bg-white">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_11.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 small-logo">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_07.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 small-logo">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_04.png"/>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 small-logo">
                        <div class="client-item">
                            <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/about/clients/client_landscape_07.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="engaging-customer">
    @include('partial.engaging')
</div>
@endsection
@section('custom_style')
<style>

</style>
@endsection