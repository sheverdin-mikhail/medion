const swiper1 = new Swiper( '.search__slider', {

    //Точки 
    pagination: {
        el: '.swiper-pagination',
      },
    //Бесконечная прокрутка  
    loop: true,

    //Стрелки навигации
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


});

const swiper2 = new Swiper( '.about__slider', {

    //Бесконечная прокрутка  
    loop: true,
    
    //Стрелки навигации
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


});

const swiper3 = new Swiper( '.stocks__slider', {

    slidesPerView: 3,
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