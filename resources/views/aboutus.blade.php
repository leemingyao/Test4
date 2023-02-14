@extends('layout')
<title>About us | {{$config["company_name"]}}</title>
@section('content')
<div class="subpage-banner">
   <div class="subpage-banner-item" style="">
        <div class="sub-banner-content">
            <h1>About Us</h1>
        </div>
   </div>
</div>
<div class="page-aboutus">
    <div class="section-text">
        <div class="container text-center">
            <h3 class="text-primary mb-3 font-weight-bold">"Logistic Solution Provider"</h3>
            <p>
                <b>{{$config["company_name"]}}</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Pellentesque ac quam eu lorem euismod ullamcorper non et nunc. Sed eget tincidunt est. In fringilla mi in metus egestas,
                sed iaculis turpis convallis. Praesent pharetra vel nisl a accumsan. Sed vestibulum vel lacus ac dictum. 
            </p>
        </div>
    </div>
    <div class="section-excellence">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="offset-xl-2 offset-lg-0 col-xl-10 col-lg-12">
                            <div class="p-5 text-center">
                                <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/aboutus.jpg"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-justify excellence-content">
                    <div class="row">
                        <div class="col-lg-10">
                            <b>Lorem ipsum dolor sit amet</b>  Suspendisse non tellus in tellus condimentum fermentum eget vitae dui. 
                            Suspendisse varius felis est, sed hendrerit ligula tempus a. Cras egestas eu sem quis iaculis. 
                            Integer massa ex, varius interdum luctus vitae, laoreet eu magna. 
                            Maecenas pellentesque dui nunc, ut posuere risus cursus mattis. <br><br>
                            <b>Lorem ipsum dolor sit amet</b>, sed hendrerit ligula tempus a. Cras egestas eu sem quis iaculis. 
                            Integer massa ex, varius interdum luctus vitae, laoreet eu magna. 
                            Maecenas pellentesque dui nunc, ut posuere risus cursus mattis.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row excellence-content-2 flex-column-reverse flex-lg-row">
                <div class="col-12 col-lg-6 content p-5 text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Pellentesque ac quam eu lorem euismod ullamcorper non et nunc. 
                        Sed eget tincidunt est. In fringilla mi in metus egestas, sed iaculis turpis convallis. 
                        Praesent pharetra vel nisl a accumsan. Sed vestibulum vel lacus ac dictum. 
                        Suspendisse non tellus in tellus condimentum fermentum eget vitae dui.
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 p-0">
                    <div class="">
                        <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/landside-transportation.jpg"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-vision">
        <div class="container-fluid">
            <div class="row">
                <div class="vision-left col-md-12 col-lg-6">
                    <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/landside-transportation.jpg"/>
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
                <div class="col-12 col-md-4">
                    <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/landside-transportation.jpg"/>
                    <h5 class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Pellentesque ac quam eu lorem euismod ullamcorper non et nunc. 
                        Sed eget tincidunt est. In fringilla mi in metus egestas, sed iaculis turpis convallis.
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/landside-transportation.jpg"/>
                    <h5 class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Pellentesque ac quam eu lorem euismod ullamcorper non et nunc. 
                        Sed eget tincidunt est. In fringilla mi in metus egestas, sed iaculis turpis convallis.
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <img class="img-fluid" src="{{rtrim($config["app_url"], '/')}}/img/landside-transportation.jpg"/>
                    <h5 class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Pellentesque ac quam eu lorem euismod ullamcorper non et nunc. 
                        Sed eget tincidunt est. In fringilla mi in metus egestas, sed iaculis turpis convallis.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="engaging-customer">
    <div class="overlay"></div>
    @include('partial.engaging')
</div>
@endsection
@section('custom_style')
<style>

</style>
@endsection