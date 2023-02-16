<footer id="footer">
    <div class='footer-inner container'>
        <div class="row">
            <div class="col-12 col-sm-4 mb-5">
                <div class="footer-logo">
                    <a href='/' class="logo-container py-1">
                        <img src="{!! rtrim($config["app_url"], '/')!!}/img/logo.png" class="img-fluid pr-2" alt="Star Pacific Lines" />
                        <h5 class="mb-1 pl-2">
                            Star Pacific Lines </br> 
                            Sdn. Bhd.
                        </h5>
                    </a>
                </div>
                <br>
                <p class="text-justify m-0 text-primary">
                    <b>{!!$config["company_name"]!!}</b> is a group of like-minded individuals with varying experiences banded together 
                    in 2011 with the immutable belief that trust and dedication in our services can compete and complete the supply 
                    chain. We innovate and invent, providing best in-class offerings time and again.
                </p>
                <br>
                <a class="float-right font-weight-bold" href='/aboutus'>Read More ></a>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-12 col-sm-7">
                <div class="row">
                    <div class="col-12 col-sm-5  mb-4">
                        <h5 class="text-primary"><b>ABOUT</b></h5>
                        <ul class='quicklink-list'>
                            <div class="row">
                                <li class="col-6 col-sm-12"><a href='/'>Home</a></li>
                                <li class="col-6 col-sm-12"><a href='/aboutus'>About Us</a></li>
                                <li class="col-6 col-sm-12"><a href='/services'>Our Services</a></li>
                                <li class="col-6 col-sm-12"><a href='/news'>Global News</a></li>
                                <li class="col-6 col-sm-12"><a href='/contactus '>Contact Us</a></li>
                            </div>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-7 pr-0">
                        <h5 class="mb-4 text-primary"><b><a href="{!!$config["app_url"]!!}">{!!$config["company_name"]!!}</a></b></h5>
                        <ul class="contact__list">                     
                            <li class="contact__item addr text-primary">
                                <i class="material-icons">location_on</i>
                                <a href="{!!$config["contact"]["location"]!!}" target="_blank">
                                    {!!$config["contact"]["addr"]!!}
                                    {!!$config["contact"]["addr2"]!!}
                                    {!!$config["contact"]["addr3"]!!}
                                    {!!$config["contact"]["addr4"]!!}
                                </a>
                            </li>
                            <li class="contact__item text-primary">
                                <i class="material-icons">phone</i>
                                <a href="tel:{!!$config["contact"]["fax"]!!}">{!!$config["contact"]["office"]!!}</a>                                
                            </li>
                            <li class="contact__item text-primary">
                                <i class="fa-solid fa-fax"></i>
                                <a href="tel:{!!$config["contact"]["fax"]!!}">{!!$config["contact"]["fax"]!!}</a>
                            </li>                            
                            <li class="contact__item text-primary">
                                <i class="material-icons">mail_outline</i>
                                <a class="text-break" href="mailto:{!!$config["contact"]["email"]!!}">{!!$config["contact"]["email"]!!}</a>
                            </li>    
                            <li class="contact__item text-primary">
                                <i class="material-icons">access_time</i>
                                <p>
                                    Monday to Friday - 9.00am - 6.00pm
                                </p>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-light">
        COPYRIGHT © 2022 {{$config["company_name"]}}
    </div>
</footer>