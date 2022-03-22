
<?php 



    function GetThisPage($link, $slug){
        $sql = "SELECT * FROM `pages` WHERE page_slug='$slug'";
        $result = mysqli_query($link, $sql);
        $clinics = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $clinics;
    }

    $page= GetThisPage($link, $slug);
    
    $id_page = $page[0]['id_page'];
    

    function GetThisSeo($link, $id_page){
        $sql = "SELECT * FROM `seo_words` WHERE id_page='$id_page'";
        $result = mysqli_query($link, $sql);
        $clinics = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $clinics;
    }
    $word = GetThisSeo($link, $id_page);