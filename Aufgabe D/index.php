<?php

if (isset($_GET['page'])){
    $pages_num = $_GET['page']-1;
} else{
    $pages_num = 0;
}

$pages = array(
    array('header.php', 'login.php', 'footer.php'),
    array('header.php', 'projekte.php', 'footer.php'),
    array('header.php', 'aufgabe.php', 'footer.php'),
    array('header.php', 'reiter.php', 'footer.php'),
    array('header.php', 'aufgaben.php', 'footer.php'),
    array('header.php', 'mitglieder.php', 'footer.php'),
);

if(isset($pages)){
    for ($i = 0; $i< 3; $i++){
        include ($pages[$pages_num][$i]);
    }
}else{
    echo 'Page not found';
}

?>