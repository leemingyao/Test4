@extends('layout')

@section('content')

<div class="subpage-banner">
   <div class="subpage-banner-item" style="">
        <div class="sub-banner-content">
            <h1>Contact Us</h1>
        </div>
   </div>
</div>
<div class="page-contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <iframe width="100%" height="300" style="border:0" loading="lazy" src="{!! rtrim($config["contact"]["location"], '/')!!}"></iframe>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-12 col-sm-4">
                <div class="contact-list">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <a href="tel:{!!$config["contact"]["office"]!!}">
                            <span>{!!$config['contact']['office']!!}</span>
                        </a>    
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-fax"></i>
                        <a href="tel:{!!$config["contact"]["fax"]!!}">
                            <span>{!!$config['contact']['fax']!!}</span>
                        </a>    
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:{!!$config["contact"]["email"]!!}">
                            <span>{!!$config['contact']['email']!!}</span>
                        </a> 
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker"></i>
                        <a href="{!!$config["contact"]["location"]!!}" target="_blank">
                            <span>
                                {!!$config["contact"]["addr"]!!}<br />
                                {!!$config["contact"]["addr2"]!!}<br />
                                {!!$config["contact"]["addr3"]!!}<br>
                                {!!$config["contact"]["addr4"]!!}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8">
                <h3 class="font-weight-bold">Enquiry Us</h3>
                <p>
                    We’d love to hear from you
                    Whether you have a question about pricing, advise, or anything else, 
                    our team is ready to answer all your questions
                    we will get back to you soon!
                </p>
                <form method="post" data-url="/enquiry" id="formContactUs">
                    <div class="alert alert-success d-none">
                        Email send successfully.
                    </div>
                    <div class="alert alert-danger d-none">
                        Something wrong happen,please try again later.
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="">Salutation</label>
                            <select name="salutation" class="form-control">
                                <option value='Mr'>Mr</option>
                                <option value='Mrs'>Mrs</option>
                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="">Name</label>
                            <input required name="name" class="form-control" placeholder="Enter your name">
                        </div>
                    </div>   
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="">Email</label>
                            <input required name="email" type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group col">
                            <label for="">Mobile</label>
                            <input required name="mobile" class="form-control" placeholder="Enter your mobile">
                        </div>
                    </div>                     
                    <div class="form-group">
                        <label>Message</label>
                        <textarea required name="message" class="form-control" rows="3" placeholder="I would like to know about..."></textarea>
                    </div>
                        <input type="hidden" name="action" value="SendMail" />
                        <button type="submit" class="btn btn-primary btn-send" href="#">
                            <span class="spinner spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span class="">Submit</span>
                        </button>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_style')
<style>

</style>
@endsection