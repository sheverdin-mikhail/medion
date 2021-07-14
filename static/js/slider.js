const swiper1 = new Swiper( '.search__slider', {


    //Точки 
    pagination: {
    el: '.swiper-pagination',
    },
    //Бесконечная прокрутка  
    loop: true,

    autoplay: {
        delay: 3000,
      },
    
    navigation: false,

   breakpoints: {
       990: {
        
            //Стрелки навигации
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },
            navigation: false,
        }
   }


});

const swiper2 = new Swiper( '.about__slider', {

    //Бесконечная прокрутка  
    loop: true,

    

    breakpoints: {
        310: {
            //Стрелки навигации
            pagination: {
                el: '.swiper-pagination',
              },
        },
        990: {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        }
    }

});

const swiper3 = new Swiper( '.stocks__slider', {

    
    pagination: {
        el: '.swiper-pagination',
      },
    //Стрелки навигации
    navigation: {
        nextEl: '.stocks__navigation_next',
        prevEl: '.stocks__navigation_prev',
    },
    spaceBetween: 10,   
    breakpoints: {
        310:{
            slidesPerView: 1,
            loop: true,
        },
        990:{
            slidesPerView: 3,
            
            loop: false,
            loopFillGroupWithBlank: true,
        }
    }

});

const swiper4 = new Swiper( '.doctors__slider', {

    autoHeight: true,
    spaceBetween: 10,   

    pagination: {
        el: '.swiper-pagination',
      },

    //Стрелки навигации
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        310:{
            slidesPerView: 1,
            loop: true,
        },
        990:{
            slidesPerView: 4,
            
            loop: false,
            loopFillGroupWithBlank: true,
        }
    }


});


const swiper5 = new Swiper( '.works__row', {

    slidesPerView: 3,
    spaceBetween: 11,   
    loop: false,
    loopFillGroupWithBlank: true,
    


    //Стрелки навигации
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
    navigation: false,
    


});


const swiper6 = new Swiper( '.spa__slider', {

    autoHeight: true,
    spaceBetween: 10,   

    pagination: {
        el: '.swiper-pagination',
      },


    breakpoints: {
        310:{
            slidesPerView: 1,
            loop: true,
        },
        990:{
            slidesPerView: 3,
            
            loop: false,
            loopFillGroupWithBlank: true,
        }
    }


});