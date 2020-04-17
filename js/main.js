$(function(){
  // sliders
    var swiper = new Swiper('.reviews__slider', {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          }
      });
      var swiper2 = new Swiper('.speaker__partners', {
        loop: true,
        spaceBetween: 10,
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 2,
            spaceBetween: 30
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 3,
            spaceBetween: 20
          },
          1024: {
            slidesPerView: 4
          },
          1440: {
            slidesPerView: 5
          }
        }
      });
// выпадающие блоки
      $('.item li').click(function(){

            let active =  $('.program__item').find('li.active');

            let act_ind = active.index();
            console.log(act_ind);
            let index = $('.item li').index(this);

            console.log(index);
          if(active.length>=1){
            active.removeClass('active');
            active.next().removeClass('show');
            
            if(act_ind != index){

                 $('.item li').eq(index).toggleClass('active');
                 $('.item li').eq(index).next('.text').toggleClass('show');
            }

          }
          else{ 
              //если нет активных, открываем
            $(this).addClass('active');
            $(this).next('.text').addClass('show');
          }

      });

// прокрутка при нажатии на стрелку
      $('.header-banner a').on('click', function() {

        let href = $(this).attr('href');
    
        $('html, body').animate({
            scrollTop: $(href).offset().top
        }, {
            duration: 370,   // по умолчанию «400» 
            easing: "linear" // по умолчанию «swing» 
        });
        return false;
    });

// фиксированная шапка
    $(window).scroll(function() {
      if ($(this).scrollTop() > 150){
      $('.header').addClass("fixed");
      }
      else{
      $('.header').removeClass("fixed");
      }
      });
// кнопка наверх
    let button = $('#button-up');	
    $(window).scroll (function () {
      if ($(this).scrollTop () > 300) {
        button.fadeIn();
      } else {
        button.fadeOut();
      }
    });

    button.on('click', function(){
      $('body, html').animate({
      scrollTop: 0
      }, 800);
      return false;
      });		 

});
    


