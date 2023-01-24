<footer id="footer">
    <div class='footer-inner container'>
        <div class="row">
            <div class="col-12 col-sm-4 mb-5">
                <div class="footer-logo">
                    <a href='/'>
                        <img src="{!! rtrim($config["app_url"], '/')!!}/img/logo.png" class="img-fluid" alt="Little Wonders" />
                    </a>
                </div>
                <br>
                <p class="text-justify m-0 text-primary">
                    <b>{!!$config["company_name"]!!}</b> is a 
                    pest control solution provider with a 
                    reputation for exceptional customer
                    service and effective results for our 
                    pest management. 
                </p>
                <br />
                <br>
                <a class="float-right" href='/about-us'>Read More ></a>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-12 col-sm-7">
                <div class="row">
                    <div class="col-12 col-sm-5  mb-4">
                        <h5 class="text-primary"><b>ABOUT</b></h5>
                        <ul class='quicklink-list'>
                            <div class="row">
                                <li class="col-6 col-sm-12"><a href='/home'>Home</a></li>
                                <li class="col-6 col-sm-12"><a href='/about-us'>About Us</a></li>
                                <li class="col-6 col-sm-12"><a href='/our-services'>Our Services</a></li>
                                <li class="col-6 col-sm-12"><a href='/news'>News & Gallery</a></li>
                                <li class="col-6 col-sm-12"><a href='/contact-us'>Contact Us</a></li>
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
                                <a href="tel:{!!$config["contact"]["fax"]!!}">{!!$config["contact"]["fax"]!!}</a>                                
                            </li>
                            <li class="contact__item text-primary">
                                <i class="material-icons">home_work</i>
                                <a href="tel:{!!$config["contact"]["fax"]!!}">{!!$config["contact"]["fax"]!!}</a>
                            </li>                            
                            <li class="contact__item text-primary">
                                <i class="material-icons">mail_outline</i>
                                <a class="text-break" href="mailto:{!!$config["contact"]["email"]!!}">{!!$config["contact"]["email"]!!}</a>
                            </li>    
                            <li class="contact__item text-primary">
                                <i class="material-icons">access_time</i>
                                <p>
                                    Monday to Friday - 8.30am - 6.00pm<br>
                                    Saturday - 8.30am - 6.00pm
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