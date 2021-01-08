<?php 
    // Init Smarty
    include("includes/smarty.php");
    include("includes/config.php");
    include("includes/search.php");
    include("includes/php-functions.php");

    $smarty->assign('dogBreedArrayCount', count($dogBreedArray));
    if ((isset($_POST['submit']) && empty($filtered)) || isset($_POST['submit']) && !empty($filtered)) {
        $smarty->assign('dogBreeds',$filtered);
        $smarty->assign('filteredCount', count($filtered));
    } else {
        $smarty->assign('dogBreeds',$dogBreedArray);
        $smarty->assign('filteredCount', 0);
        $smarty->assign('thBookmark', $_COOKIE['th-bookmark']);
    }
    $smarty->assign('ifSubmit', $_COOKIE['ifSubmit']);
    $smarty->assign('dogBreedDetails',$dogBreedDetails);
    $smarty->assign('invisibleDogBreed', $invisibleDogBreed);


    $smarty->display('layout_main.html');