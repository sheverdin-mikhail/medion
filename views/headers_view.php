<?php 
    function GetHeadersView($link, $id_page){
        $sql = "SELECT 
            *
        FROM `pages_headers` WHERE `id_page`='$id_page'";
        $result = mysqli_query($link, $sql);
        $category = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $category;
    }

    ?>