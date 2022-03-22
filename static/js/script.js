ymaps.ready(function () {
    var map = new ymaps.Map('map', {
        center: [41.329294, 69.257431],
        zoom: 17,
        controls: []
    });

  // Создание метки с круглой активной областью.
  var circleLayout = ymaps.templateLayoutFactory.createClass('<div class="placemark_layout_container"><div class="circle_layout"></div></div>');

  var circlePlacemark = new ymaps.Placemark(
    [41.32944,69.25816], {
          hintContent: '<div class="map__card"><img class="map__img" src="static/img/map-logo.jpg"><p class="map__label">Медицинский центр</p><p class="map__text map__text_medion">MEDION CLINIC, AESTHETIC & SPA</p><p class="map__label">Адрес центра:</p><p class="map__text map__text_address">Ташкент,<br> ул.Зульфияхоннум 18</p><div>'
      }, {
          iconLayout: circleLayout,
          // Описываем фигуру активной области "Круг".
          iconShape: {
              type: 'Circle',
              // Круг описывается в виде центра и радиуса
              coordinates: [0, 0],
              radius: 25
          }
      }
  );
  var circlePlacemark2 = new ymaps.Placemark(
    [41.326450, 69.249176], {
          hintContent: '<div class="map__card"><img class="map__img" src="static/img/map-logo.jpg"><p class="map__label">Медицинский центр</p><p class="map__text map__text_medion">MEDION INNOVATION</p><p class="map__label">Адрес центра:</p><p class="map__text map__text_address">Ташкент,<br> ул. Абдуллы Кадыри, 39 </p><div>'
      }, {
          iconLayout: circleLayout,
          // Описываем фигуру активной области "Круг".
          iconShape: {
              type: 'Circle',
              // Круг описывается в виде центра и радиуса
              coordinates: [0, 0],
              radius: 25
          }
      }
  );
  var circlePlacemark3 = new ymaps.Placemark(
    [41.327526, 69.184201], {
          hintContent: '<div class="map__card"><img class="map__img" src="static/img/map-logo.jpg"><p class="map__label">Медицинский центр</p><p class="map__text map__text_medion">MEDION FAMILY HOSPITAL</p><p class="map__label">Адрес центра:</p><p class="map__text map__text_address">Ташкент,<br> ул. Истирохат 258</p><div>'
      }, {
          iconLayout: circleLayout,
          // Описываем фигуру активной области "Круг".
          iconShape: {
              type: 'Circle',
              // Круг описывается в виде центра и радиуса
              coordinates: [0, 0],
              radius: 25
          }
      }
  );

    map.geoObjects.add(circlePlacemark);
    map.geoObjects.add(circlePlacemark2);
    map.geoObjects.add(circlePlacemark3);
    map.behaviors.disable('scrollZoom');


    let clinics = $("[data-clinic]")
    clinics.on('click', function(){
        let clinic = $(this).data('clinic');
    if (clinic==1){
        map.setCenter([41.329294, 69.257431])
    }else  if (clinic==2){
        map.setCenter([41.326450, 69.249176])
    }else  if (clinic==3){
        map.setCenter([41.327526, 69.184201])
    }
    })
     

});


$(document).ready(function(){
    $('.header__address').on('click', function(){
        $('.header__addresses ').toggleClass('active');
    })
    

    $('.card').hover(function(){
        $(this).toggleClass('active')
    });

    $('.menu__burger').on('click', function(){
        $(this).toggleClass('active')
        $('.header__menu').toggleClass('active')
        $('body').toggleClass('_lock')
        $('.header').toggleClass('active')
        $('.search__search').toggleClass('hide')
    })

    $('.services__more').on('click', function(){

            $(this).toggleClass('active');
            
            if($(this).hasClass('active')){
                $(this).parent().siblings().slideDown();
                if($(this).parent().parent().siblings().children().children().hasClass('active')){
                    $(this).parent().parent().siblings().children('.hide').slideUp()
                    $(this).parent().parent().siblings().children().children().toggleClass('active')
                }
            }else{
                $(this).parent().siblings().slideUp();
            }

    
    });


    
    $('.news__button').on('click', function(){
        $(this).addClass('active')
        $(this).siblings().removeClass('active')
        //Категории новостей
        let filter = $("[data-filter]");

        filter.on("click", function(){
        
            let cat =   $(this).data('filter');
            

            $("[data-cat]").each(function(){

                let workcat = $(this).data("cat");

                if (workcat != cat){

                    $(this).addClass('hide')

                }else{
                    $(this).removeClass('hide')
                }

            })

        });
    })

    $('.news__card_news').on('click', function(){
        
        $link = $(this).data('link')
        window.open('news_new.php?id='+$link)
    })
    
    $('.news__card_stocks').on('click', function(){
        
        $link = $(this).data('link')
        window.open('stocks_detail.php?id='+$link)
    })
    



    $('.services__item_row').on('click', function(){

            $(this).toggleClass('active')
            $(this).children('.services__item_more').toggleClass('active')
            if(($(this).children('.services__item_more').hasClass('active'))){
                $(this).siblings().slideDown()
                if($(this).parent().siblings().children().children().hasClass('active')){
                    $(this).parent().siblings().children('.hide').slideUp()
                    $(this).parent().siblings().children().children().removeClass('active')
                }
                
            }else{
                $(this).siblings().slideUp()
                
            }

        

        
    })



    $('.spa__navigation_object ').on('click', function(){
        if(!($(this).hasClass('active'))){
            $(this).addClass('active')
            $(this).siblings().removeClass('active')
        }
    })



    $('.services__menu__item_text').on('click', function(){
        let href = $(this).attr("href")
        $(href).children('.services__item_row').trigger('click')
    })




    //Сортировка блока СПА процедур
    let filter = $("[data-filter]");

    filter.on("click", function(){
       
        let cat =$(this).data('filter');
        if(cat != "all"){
            $("[data-cat]").each(function(){

                let workcat = $(this).data("cat");
                
                if (workcat != cat){
    
                    $(this).addClass('hide')
    
                }else{
                    $(this).removeClass('hide')
                }
    
            })
        }else{
            $("[data-cat]").each(function(){
                    $(this).removeClass('hide')
            })
        }

    });

//
$('.career__item_more').on('click', function(){
    if($(this).closest('.career__item').find('.career__item_open').hasClass('active')){
        $(this).closest('.career__item').find('.career__item_open').slideUp('active')
        $(this).closest('.career__item').find('.career__item_open').removeClass('active')
    }else{
        $(this).closest('.career__item').find('.career__item_open').addClass('active')
        $(this).closest('.career__item').find('.career__item_open').slideDown('active')
    }
})
  

})




