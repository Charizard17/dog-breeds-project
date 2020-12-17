<?php
    include("php-functions.php");

    // Search filter
    if (isset($_POST['submit'])) {

        $filtered = $dogBreedArray;
        
        $filtered = hasContainWords('breed_name', $filtered);
        $filtered = hasContainTerms('minWeight', $filtered, 'minWeight', 'maxWeight');
        $filtered = hasContainTerms('maxWeight', $filtered, 'minWeight', 'maxWeight');
        $filtered = hasContainTerms('minHeight', $filtered, 'minHeight', 'maxHeight');
        $filtered = hasContainTerms('maxHeight', $filtered, 'minHeight', 'maxHeight');
        $filtered = hasContainWords('temperament', $filtered);

    }


    // we create 2 functions for filtering our array after search
    function hasContainWords($postValue, $dataArray) {
        if ($_POST[$postValue]) {
            $dataArrayTemp = [];
            $index = 0;
            if (is_array($dataArray)){
                for ($i = 0; $i < count($dataArray); ++$i) {
                    if (strpos(strtolower($dataArray[$i][$postValue]), strtolower($_POST[$postValue])) !== false) {
                        $dataArrayTemp[$index] = $dataArray[$i];
                        ++$index;
                    }
                }
            }
            $dataArray = $dataArrayTemp;
        }
        return $dataArray;
    }
    function hasContainTerms($postValue, $dataArray, $dataArrayFirstIndex, $dataArraySecondIndex) {
        if ($_POST[$postValue]) {
            $dataArrayTemp = [];
            $index = 0;
            if (is_array($dataArray)){
                for ($i = 0; $i < count($dataArray); ++$i) {
                    if ($_POST[$postValue] >= $dataArray[$i][$dataArrayFirstIndex] && $_POST[$postValue] <= $dataArray[$i][$dataArraySecondIndex]) {
                        $dataArrayTemp[$index] = $dataArray[$i];
                        ++$index;
                    }
                }
            }
            $dataArray = $dataArrayTemp;
        }
        return $dataArray;
    }