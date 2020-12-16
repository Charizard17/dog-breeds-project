<?php 
    // Init Smarty
    include("includes/smarty.php");
    include("includes/config.php");
    include("includes/php-functions.php");

    $smarty->assign('foo',$dogBreedArray);

    $smarty->display('layout_main.html');