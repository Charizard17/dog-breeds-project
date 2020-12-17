<?php 
    // Init Smarty
    include("includes/smarty.php");
    include("includes/config.php");
    include("includes/search.php");
    include("includes/php-functions.php");

    if (empty($filtered)) {
        $smarty->assign('dogBreeds',$dogBreedArray);
    } else {
        $smarty->assign('dogBreeds',$filtered);
    }

    $smarty->display('layout_main.html');