<header id="header">
    <div class="header-inner">
        <div class="header-hamburger">
            <div class="hamburger-nav">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <a href='/' class="logo-container py-1">
            <img src="{!! rtrim($config["app_url"], '/')!!}/img/logo.png" class="img-fluid pr-2" alt="Star Pacific Lines" />
            <p class="mb-1">
                Star Pacific Lines
                Sdn. Bhd.
            </p>
        </a>
        <div class="header-nav">
            <ul class="nav-menu nav-one align-item-center">
                <li class="nav-item"><a class="nav-link" href="{!! rtrim($config["app_url"], '/')!!}/home" data-page="home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{!! rtrim($config["app_url"], '/')!!}/aboutus" data-page="aboutus">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{!! rtrim($config["app_url"], '/')!!}/services" data-page="our-services">Our Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{!! rtrim($config["app_url"], '/')!!}/news" data-page="news">News & Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="{!! rtrim($config["app_url"], '/')!!}/contactus" data-page="contact-us">Contact Us</a></li>
            </ul>
        </div>
        <div class="header-phone">
            <a class="btn btn-primary text white badge-pill" href="tel:{!!$config["contact"]["fax"]!!}">
                <i class="fas fa-phone-alt"></i>
                <span class="d-md-inline-block d-none pl-1">Call Us</span>
            </a>
        </div>
    </div>
    <div class="header-topline">
        <div class="cross-container">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="header-mobile-nav">
        <ul class="nav-menu nav-one">
            <li class="nav-item"><a class="nav-link" href="{!! rtrim($config["app_url"], '/')!!}/home" data-page="home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{!! rtrim($config["app_url"], '/')!!}/aboutus" data-page="about-us">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="{!! rtrim($config["app_url"], '/')!!}/services" data-page="our-services">Our Services</a></li>
            <li class="nav-item"><a class="nav-link" href="{!! rtrim($config["app_url"], '/')!!}/news" data-page="news">News & Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="{!! rtrim($config["app_url"], '/')!!}/contactus" data-page="contact-us">Contact Us</a></li>
        </ul>
        <div class="header-contact">
            <div class="header-contact-item contact-addr">
                <a href="<?php echo $config["contact"]["location"] ?>" target="_blank">
                    <?php echo $config["contact"]["addr"]; ?><br />
                    <?php echo $config["contact"]["addr2"]; ?><br />
                    <?php echo $config["contact"]["addr3"]; ?>
                </a>
            </div>
            <div class="header-contact-item contact-mobile">
                <i class="fas fa-phone-alt"> </i>
                <a href="tel:<?php echo str_replace(" ","", $config["contact"]["fax"]) ?>">
                    <?php echo ": " . $config["contact"]["fax"] ?>
                </a>
            </div>
            <div class="header-contact-item contact-email">
                <i class="fa-solid fa-envelope"></i>
                <a href="mailto:<?php echo $config["contact"]["email"] ?>">
                    <?php echo ": " . $config["contact"]["email"] ?>
                </a>
            </div>
        </div>
        <div class="header-socialmedia">
            <div class="socialmedia-item logo-fb">
                <a href="<?php echo $config["social"]["facebook"] ?>">
                    <img src="<?php echo $config["app_url"] ?>/img/social/facebook.png" class="img-fluid bg-light rounded-circle" alt="Welcome to our Facebook"/>
                </a>
            </div>
        </div>
    </div>
</header>