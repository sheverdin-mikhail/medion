$(document).ready(function(){
    var paramsString = document.location.search;
    var searchParams = new URLSearchParams(paramsString);

    console.log(searchParams.get("division_slug")); 
    console.log(searchParams.get("id_service")); 
    triggerService(searchParams.get("division_slug"), searchParams.get("id_service"))


})


function triggerService(slug, id){
    $("html, body").animate({scrollTop: $('#'+slug).offset().top+"px"});
    $('#'+slug).children().children('span').trigger('click');
    if (id != null ){
        $('#more-'+id).trigger('click');
    }
    return false;
}