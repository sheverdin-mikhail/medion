$(document).ready(function(){

 

    function clean(){
        $('.search__list').children().remove(('li.search__list__item'))
    }



    function send_get(){

        var q = $('#q').val();
        $.ajax({
            type: "GET",
            url: "/views/search.php",
            data: {search: q},
            success: function(response){
                clean()
                console.log(response)
                $("#search_list").html(response).show()
              },
            error: function(){
            clean()
                console.log("error")
            }
        })
    }


    $('#q').on('input', function(){
        setTimeout(send_get, 1500)
      })
});