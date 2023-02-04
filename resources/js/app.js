import './bootstrap';
import '../css/app.css';

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
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    arrows: true,
    dots: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          slidesToShow: 1
        }
      }
    ]
  });
      
      