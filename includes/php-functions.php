<?php
    include("config.php");

    $dogBreedArray = [];
    // // Define variables with checking if data missing or not
    for ($i = 0; $i < count($JSONarray); ++$i) {
        if (!empty($JSONarray[$i]['id'])) {$dogBreedArray[$i]['id'] = $JSONarray[$i]['id'];} else {$dogBreedArray[$i]['id'] = "–";}
        if (!empty($JSONarray[$i]['name'])) {$dogBreedArray[$i]['breed_name'] = $JSONarray[$i]['name'];} else {$dogBreedArray[$i]['breed_name'] = "–";}
        $dogBreedArray[$i]['image'] = "img/doge.png";
        if (!empty($JSONarray[$i]['weight']['metric'])) {$dogBreedArray[$i]['weight'] = $JSONarray[$i]['weight'];} else {$dogBreedArray[$i]['weight'] = "–";}
        if (!empty($JSONarray[$i]['height']['metric'])) {$dogBreedArray[$i]['height'] = $JSONarray[$i]['height'];} else {$dogBreedArray[$i]['height'] = "–";}
        if (!empty($JSONarray[$i]['origin'])) {$dogBreedArray[$i]['origin'] = $JSONarray[$i]['origin'];} else {$dogBreedArray[$i]['origin'] = "–";}
        if (!empty($JSONarray[$i]['life_span'])) {$dogBreedArray[$i]['life_span'] = $JSONarray[$i]['life_span'];} else {$dogBreedArray[$i]['life_span'] = "–";}
        if (!empty($JSONarray[$i]['temperament'])) {$dogBreedArray[$i]['temperament'] = $JSONarray[$i]['temperament'];} else {$dogBreedArray[$i]['temperament'] = "–";}
        if (!empty($JSONarray[$i]['breed_group'])) {$dogBreedArray[$i]['breed_group'] = $JSONarray[$i]['breed_group'];} else {$dogBreedArray[$i]['breed_group'] = "–";}
        if (!empty($JSONarray[$i]['bred_for'])) {$dogBreedArray[$i]['bred_for'] = $JSONarray[$i]['bred_for'];} else {$dogBreedArray[$i]['bred_for'] = "–";}
    }

    // first element of dog breed array for putting table as invisible, 
    //if clicked favourite and there is no favourite element
    $invisibleDogBreed = $dogBreedArray[0];
    
    // Split min and max weight
    for ($j = 0; $j < count($dogBreedArray); ++$j) {
        if (strpos($dogBreedArray[$j]["weight"]["metric"], "-")) {
            list($dogBreedArray[$j]["minWeight"], $dogBreedArray[$j]["maxWeight"]) = array_pad(explode(" - ", $dogBreedArray[$j]["weight"]["metric"]), 2, null);
        } else {
            $dogBreedArray[$j]["maxWeight"] = $dogBreedArray[$j]["weight"]["metric"];
        }
    }
    // Split min and max height
    for ($k = 0; $k < count($dogBreedArray); ++$k) {
        if (strpos($dogBreedArray[$k]["height"]["metric"], "-")) {
            list($dogBreedArray[$k]["minHeight"], $dogBreedArray[$k]["maxHeight"]) = array_pad(explode(" - ", $dogBreedArray[$k]["height"]["metric"]), 2, null);
        } else {
            $dogBreedArray[$k]["maxHeight"] = $dogBreedArray[$k]["height"]["metric"];
        }
    }

    // show details if cookie exist
    $dogBreedDetails = array();
    $index0 = "";
    if (isset($_COOKIE['detailed-id'])) {
        $index0 = $_COOKIE['detailed-id'];
        for ($i = 0; $i < count($dogBreedArray); ++$i) {
            if ($dogBreedArray[$i]['id'] == $index0) {
                $dogBreedDetails = $dogBreedArray[$i];
            }
        }
    }

    // only show bookmarked elements
    $index1 = 0;
    if (isset($_COOKIE['th-bookmark']) && $_COOKIE['th-bookmark'] == 'true') {
        if (isset($_COOKIE['bookmarks']) && $_COOKIE['bookmarks'] !== '[]' && $_COOKIE['bookmarks'] !== '') {
            $bookmarkedIDs = json_decode($_COOKIE['bookmarks'], true);
            for ($j = 0; $j < count($bookmarkedIDs); ++$j) {
                for ($k = 0; $k < count($dogBreedArray); ++$k) {
                    if ($dogBreedArray[$k]['id'] == $bookmarkedIDs[$j]) {
                        $testArray[$index1] = $dogBreedArray[$k];
                        ++$index1;
                    }
                }
            }
            $dogBreedArray = $testArray;
        } else {
            $dogBreedArray = [];
        }
    }

    // sort names by alphabetical order / reverse
    if (isset($_COOKIE['th-name']) && $_COOKIE['th-name'] == 'true') {
        $dogBreedArray = array_reverse($dogBreedArray);
    }


    $dogBreedArray = array_map(function($element) {
        return (object) $element;
    }, $dogBreedArray);


    // main array sort by weight
    if (isset($_COOKIE['th-weight']) && $_COOKIE['th-weight'] == 'minMinth-weight') {
        usort($dogBreedArray, function($object1, $object2) {
            return $object1->minWeight > $object2->minWeight; 
        });
    } elseif (isset($_COOKIE['th-weight']) && $_COOKIE['th-weight'] == 'minMaxth-weight') {
        usort($dogBreedArray, function($object1, $object2) {
            return $object1->minWeight < $object2->minWeight; 
        });
    } elseif (isset($_COOKIE['th-weight']) && $_COOKIE['th-weight'] == 'maxMinth-weight') {
        usort($dogBreedArray, function($object1, $object2) {
            return $object1->maxWeight > $object2->maxWeight; 
        });
    } elseif (isset($_COOKIE['th-weight']) && $_COOKIE['th-weight'] == 'maxMaxth-weight') {
        usort($dogBreedArray, function($object1, $object2) {
            return $object1->maxWeight < $object2->maxWeight; 
        });
    }


    // main array sort by height
    if (isset($_COOKIE['th-height']) && $_COOKIE['th-height'] == 'minMinth-height') {
        usort($dogBreedArray, function($object1, $object2) {
            return $object1->minHeight > $object2->minHeight; 
        });
    } elseif (isset($_COOKIE['th-height']) && $_COOKIE['th-height'] == 'minMaxth-height') {
        usort($dogBreedArray, function($object1, $object2) {
            return $object1->minHeight < $object2->minHeight; 
        });
    } elseif (isset($_COOKIE['th-height']) && $_COOKIE['th-height'] == 'maxMinth-height') {
        usort($dogBreedArray, function($object1, $object2) {
            return $object1->maxHeight > $object2->maxHeight; 
        });
    } elseif (isset($_COOKIE['th-height']) && $_COOKIE['th-height'] == 'maxMaxth-height') {
        usort($dogBreedArray, function($object1, $object2) {
            return $object1->maxHeight < $object2->maxHeight; 
        });
    }