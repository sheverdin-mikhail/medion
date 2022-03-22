<?
   
    function getFooterView($link){
        $sql = "SELECT * FROM footer";
        $result = mysqli_query($link, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
    }

    $footer = getFooterView($link);