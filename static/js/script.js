ymaps.ready(function () {
    var map = new ymaps.Map('map', {
        center: [41.329294, 69.257431],
        zoom: 17,
        controls: []
    });




  // Создание метки с круглой активной областью.
  var circleLayout = ymaps.templateLayoutFactory.createClass('<div class="placemark_layout_container"><div class="circle_layout"></div></div>');

  var circlePlacemark = new ymaps.Placemark(
    [41.329294, 69.257431], {
          hintContent: '<div class="map__card"><img class="map__img" src="static/img/map-logo.jpg"><p class="map__label">Медицинский центр</p><p class="map__text map__text_medion">“Medion”</p><p class="map__label">Адрес центра:</p><p class="map__text map__text_address">Ташкент,<br> ул.Зульфияхоннум 18</p><div>'
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
    map.behaviors.disable('scrollZoom');

});


$(document).ready(function(){

    $('.card').hover(function(){
        $(this).toggleClass('active')
    });


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

    $('.services__item_more').on('click', function(){
        $(this).toggleClass('active')

        if(($(this).hasClass('active'))){
            $(this).parent().siblings().slideDown()
            if($(this).parent().parent().siblings().children().children().hasClass('active')){
                $(this).parent().parent().siblings().children('.hide').slideUp()
                $(this).parent().parent().siblings().children().children().removeClass('active')
            }
        }else{
            $(this).parent().siblings().slideUp()
        }
    })


    $('.spa__navigation_object ').on('click', function(){
        if(!($(this).hasClass('active'))){
            $(this).addClass('active')
            $(this).siblings().removeClass('active')
        }
    })

})




