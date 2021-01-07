<?php
    include("php-functions.php");

    // Search filter
    if (isset($_POST['submit'])) {

        $filtered = $dogBreedArray;
        
        $filtered = hasContainWords('breed_name', $filtered, 'saveBreedName');
        $filtered = hasContainTerms('minWeight', $filtered, 'minWeight', 'maxWeight', 'saveMinWeight');
        $filtered = hasContainTerms('maxWeight', $filtered, 'minWeight', 'maxWeight', 'saveMaxWeight');
        $filtered = hasContainTerms('minHeight', $filtered, 'minHeight', 'maxHeight', 'saveMinHeight');
        $filtered = hasContainTerms('maxHeight', $filtered, 'minHeight', 'maxHeight', 'saveMaxHeight');
        $filtered = hasContainWords('temperament', $filtered, 'saveTemperament');

    }

    // we create 2 functions for filtering our array after search
    function hasContainWords($postValue, $dataArray, $cookieName) {
        $index2 = 0;
        if ($_POST[$postValue]) {
            $dataArrayTemp = [];
            if (is_array($dataArray)){
                for ($i = 0; $i < count($dataArray); ++$i) {
                    if (strpos(strtolower($dataArray[$i][$postValue]), strtolower($_POST[$postValue])) !== false) {
                        $dataArrayTemp[$index2] = $dataArray[$i];
                        ++$index2;
                    }
                }
            }
            $dataArray = $dataArrayTemp;
            setcookie($cookieName, $_POST[$postValue]);
        }
        return $dataArray;
    }
    function hasContainTerms($postValue, $dataArray, $dataArrayFirstIndex, $dataArraySecondIndex, $cookieName) {
        if ($_POST[$postValue]) {
            $dataArrayTemp = [];
            $index3 = 0;
            if (is_array($dataArray)){
                for ($i = 0; $i < count($dataArray); ++$i) {
                    if ($_POST[$postValue] >= $dataArray[$i][$dataArrayFirstIndex] && $_POST[$postValue] <= $dataArray[$i][$dataArraySecondIndex]) {
                        $dataArrayTemp[$index3] = $dataArray[$i];
                        ++$index3;
                    }
                }
            }
            $dataArray = $dataArrayTemp;
            setcookie($cookieName, $_POST[$postValue]);
        }
        return $dataArray;
    }