<? require_once 'include/db.php';
function getIconsView($link){
    $sql = "SELECT * FROM icon";
    $result  = mysqli_query($link, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getSPACategoryView($link){
    $sql = "SELECT * FROM spa_category";
    $result  = mysqli_query($link, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getSPAProcedureView($link){
    $sql = "SELECT * FROM spa_procedure ORDER BY `id_category-spa`";
    $result  = mysqli_query($link, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


$icons = getIconsView($link);
$spa_category = getSPACategoryView($link);
$spa_procedure = getSPAProcedureView($link);
