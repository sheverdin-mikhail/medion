const swiper1 = new Swiper( '.search__slider', {


    //Точки 
    pagination: {
    el: '.swiper-pagination',
    },
    //Бесконечная прокрутка  
    loop: true,


   breakpoints: {
       990: {
        
            //Стрелки навигации
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
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
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
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

    slidesPerView: 4,
    spaceBetween: 10,   
    loop: false,
    loopFillGroupWithBlank: true,

    pagination: {
        el: '.swiper-pagination',
      },

    //Стрелки навигации
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


});


const swiper5 = new Swiper( '.works__row', {

    slidesPerView: 3,
    spaceBetween: 11,   
    loop: false,
    loopFillGroupWithBlank: true,



    //Стрелки навигации
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


});
