<?
   
    function getFooterView($link){
        $sql = "SELECT * FROM footer";
        $result = mysqli_query($link, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
    }
    function getClinicsView($link){
        $sql = "SELECT * FROM clinics";
        $result  = mysqli_query($link, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    $footer = getFooterView($link);
    $clinics = getClinicsView($link);
