$(document).ready(function(){

    
    $('.language-menu__on').click(function(){
        $(this).siblings().toggleClass('hide')
        $(this).parent().toggleClass('active')
    })

    $('.footer__social').hover(function(){
        $(this).toggleClass('active')
    })


});

