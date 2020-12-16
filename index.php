<?php 
    // Init Smarty
    include("includes/smarty.php");

    include("includes/php-functions.php");

    $smarty->assign('foo',$dogBreedArray);

    //$smarty->fetch("index.html");
    //$smarty->fetch("layout_main.html");
    $smarty->display('layout_main.html');