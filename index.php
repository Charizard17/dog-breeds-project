<!-- <?php include "header&footer/header.php" ?>
<?php
    echo '<form class="mt-2 mr-5 ml-5" action="index.php" method="POST">
            <h2 class="text-center">Find your dog!</h2>
            <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                    <span class="input-group-text">Breed Name</span>
                </div>
                <input type="text" class="form-control mr-3" name="breed_name" id="breed_name">
                <div class="input-group-prepend">
                    <span class="input-group-text">Weight (kg)</span>
                </div>
                <input type="text" class="form-control" name="minWeight" id="minWeight" placeholder="Min">
                <input type="text" class="form-control mr-3" name="maxWeight" id="maxWeight" placeholder="Max">
                <div class="input-group-prepend">
                    <span class="input-group-text">Height (cm)</span>
                </div>
                <input type="text" class="form-control" name="minHeight" id="minHeight" placeholder="Min">
                <input type="text" class="form-control mr-3" name="maxHeight" id="maxHeight" placeholder="Max">
                <div class="input-group-prepend">
                    <span class="input-group-text">Temperament</span>
                </div>
                <input type="text" class="form-control" name="temperament" id="temperament">
            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Search">
        </form>';
        
    // Search filter
    if (isset($_POST['submit'])) {

        $filtered = $dogBreedArray;
        
        $filtered = hasContainWords('breed_name', $filtered);
        $filtered = hasContainTerms('minWeight', $filtered, 'minWeight', 'maxWeight');
        $filtered = hasContainTerms('maxWeight', $filtered, 'minWeight', 'maxWeight');
        $filtered = hasContainTerms('minHeight', $filtered, 'minHeight', 'maxHeight');
        $filtered = hasContainTerms('maxHeight', $filtered, 'minHeight', 'maxHeight');
        $filtered = hasContainWords('temperament', $filtered);

        // Create table
        tableRowCreator($filtered);
    } else {
        // Create table
        tableRowCreator($dogBreedArray);
    }

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
?>
<?php include "header&footer/footer.php" ?> -->

<?php 
// Init Smarty
    include("includes/smarty.php");

    $smarty->fetch("index.html");
    $smarty->fetch("layout_main.html");
    $smarty->display('layout_main.html');