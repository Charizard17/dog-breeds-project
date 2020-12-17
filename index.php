<?php 
    // Init Smarty
    include("includes/smarty.php");
    include("includes/config.php");
    include("includes/search.php");
    include("includes/php-functions.php");

    $smarty->assign('dogBreeds',$dogBreedArray);

    $smarty->display('layout_main.html');