$(document).ready(function(){
	$('.menu-toggle').hover(function(){
    $('nav').toggleClass('activation');
  });

  $('ul.mainUl li').hover(function(){
    $(this).siblings().removeClass('active');
    $(this).toggleClass('active');
  });

  $('.touchHere').hover(function(){
    $('#consert').css(({"position": "absolute", "top": "20px"}));
  });

  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows:false,
    centerMode: true,
    focusOnSelect: true,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 2000,
  });
  $('.responsive').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  arrows:false,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
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

var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
   var accItem = $('.accordion-item'),
    accItemTitle = accItem.find('.title'),
    accItemInfo = accItem.find('.info');
    accItemInfo.hide();
    accItem.each(function(){
      if ($(this).hasClass('active')) {
        $(this).find('.info').show();
        $(this).children('.title').find('.open').hide();
        $(this).children('.title').find('.close').show();
      }else{
        $(this).children('.title').find('.open').show();
        $(this).children('.title').find('.close').hide();
      }
    })
    accItemTitle.on('click',function(){
      $(this).parents('.accordion-item').addClass('active').siblings().removeClass('active').find('.info').slideUp();
      $(this).siblings('.info').slideDown();

      accItem.each(function(){
        if ($(this).hasClass('active')) {
          $(this).find('.info').show();
          $(this).children('.title').find('.open').hide();
          $(this).children('.title').find('.close').show();
        }else{
          $(this).children('.title').find('.open').show();
          $(this).children('.title').find('.close').hide();
        }
      })
    })
    

});
