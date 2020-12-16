<?php
    include("config.php");

    $dogBreedArray = [];
    // // Define variables with checking if data missing or not
    for ($i = 0; $i < count($JSONarray); ++$i) {
        if (!empty($JSONarray[$i]['id'])) {$dogBreedArray[$i]['id'] = $JSONarray[$i]['id'];} else {$dogBreedArray[$i]['id'] = "–";}
        if (!empty($JSONarray[$i]['name'])) {$dogBreedArray[$i]['breed_name'] = $JSONarray[$i]['name'];} else {$dogBreedArray[$i]['breed_name'] = "–";}
        $dogBreedArray[$i]['img'] = "img/doge.png";
        if (!empty($JSONarray[$i]['weight']['metric'])) {$dogBreedArray[$i]['weight'] = $JSONarray[$i]['weight'];} else {$dogBreedArray[$i]['weight'] = "–";}
        if (!empty($JSONarray[$i]['height']['metric'])) {$dogBreedArray[$i]['height'] = $JSONarray[$i]['height'];} else {$dogBreedArray[$i]['height'] = "–";}
        if (!empty($JSONarray[$i]['origin'])) {$dogBreedArray[$i]['origin'] = $JSONarray[$i]['origin'];} else {$dogBreedArray[$i]['origin'] = "–";}
        if (!empty($JSONarray[$i]['life_span'])) {$dogBreedArray[$i]['life_span'] = $JSONarray[$i]['life_span'];} else {$dogBreedArray[$i]['life_span'] = "–";}
        if (!empty($JSONarray[$i]['temperament'])) {$dogBreedArray[$i]['temperament'] = $JSONarray[$i]['temperament'];} else {$dogBreedArray[$i]['temperament'] = "–";}
        if (!empty($JSONarray[$i]['breed_group'])) {$dogBreedArray[$i]['breed_group'] = $JSONarray[$i]['breed_group'];} else {$dogBreedArray[$i]['breed_group'] = "–";}
        if (!empty($JSONarray[$i]['bred_for'])) {$dogBreedArray[$i]['bred_for'] = $JSONarray[$i]['bred_for'];} else {$dogBreedArray[$i]['bred_for'] = "–";}
    }
    
    // Split min and max weight
    for ($j = 0; $j < count($dogBreedArray); ++$j) {
        list($dogBreedArray[$j]["minWeight"], $dogBreedArray[$j]["maxWeight"]) = array_pad(explode(" - ", $dogBreedArray[$j]["weight"]["metric"]), 2, null);
    }
    // Split min and max height
    for ($k = 0; $k < count($dogBreedArray); ++$k) {
        list($dogBreedArray[$k]["minHeight"], $dogBreedArray[$k]["maxHeight"]) = array_pad(explode(" - ", $dogBreedArray[$k]["height"]["metric"]), 2, null);
    }
    
    // Create a function for table
    function tableRowCreator($data) {
        if (is_array($data)) {
            echo "<br><h class='ml-3'><b>". count($data) ."</b> dog breed found.</h5><br>";
            echo '
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Bookmark</th>
                            <th scope="col">ID</th>
                            <th scope="col">Breed Name</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Weight kg</th>
                            <th scope="col">Height cm</th>
                            <th scope="col">Origin</th>
                            <th scope="col">Life Span</th>
                            <th scope="col">Temperament</th>
                            <th scope="col">Breed Group</th>
                            <th scope="col">Bred For</th>
                        </tr>
                    </thead>
                    <tbody>';
            for ($index = 0; $index < count($data); ++$index) {
                echo    '<tr>
                            <th><img style="cursor: pointer;" id="'. $data[$index]["id"] .'" src="https://img.icons8.com/fluent/48/000000/star.png"/ onClick="saveClickedElement(this.id)"></th>
                            <td scope="row">'. $data[$index]["id"] .'</td>
                            <td>'. $data[$index]["breed_name"] .'</td>
                            <td>'. $data[$index]["weight"]["metric"] .'</td>
                            <td>'. $data[$index]["height"]["metric"] .'</td>
                            <td>'. $data[$index]["origin"] .'</td>
                            <td>'. $data[$index]["life_span"] .'</td>
                            <td>'. $data[$index]["temperament"] .'</td>
                            <td>'. $data[$index]["breed_group"] .'</td>
                            <td>'. $data[$index]["bred_for"] .'</td>
                        </tr>';
            }
            echo '
                </tbody>
            </table>';
        } else {
            echo "No dog breed found";
        }
    }

    setcookie('my-favourite', '');



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