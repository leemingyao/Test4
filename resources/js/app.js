import './bootstrap';
import '../css/app.css';

//header
$( ".header-hamburger" ).click(function() {
  $( ".header-mobile-nav" ).css( "display", "block");
  $( ".header-topline" ).css( "display", "block");
  $( ".header-inner" ).css( "display", "none");
});

//HOME
Vue.component('card', {
    template: '#blog-card',
    data: () => ({
      name: 'Lorem ipsum dolor sit amet',
      category: 'Travel',
      image: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/1159990/pike-place.jpg',
      author: 'Lorem ipsum dolor',
      desc: `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus magna lorem`,
    })
  });
  
  new Vue({
    el: '#container'
  });

  $('.slick-class').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    arrows: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
      
      