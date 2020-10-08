<?php include "header&footer/header.php" ?>
<?php

    // Split min and max weight
    for ($j = 0; $j < count($JSONarray); ++$j) {
        list($minWeight[$j], $maxWeight[$j]) = array_pad(explode(" - ", $weight[$j]), 2, null);
    }

    // Split min and max height
    for ($k = 0; $k < count($JSONarray); ++$k) {
        list($minHeight[$k], $maxHeight[$k]) = array_pad(explode(" - ", $height[$k]), 2, null);
    }

    // Create table after search
    echo '
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
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

    // Search filter
    if (isset($_POST['submit'])) {
        for ($x = 0; $x < count($JSONarray); ++$x) {
            if (!empty($_POST['minWeight']) && !empty($_POST['maxWeight'])) {
                if ($_POST['minWeight'] > $_POST['maxWeight']) {
                    echo "The minimum weight cannot be greater than the maximum weight.";
                    break;
                } elseif (($minWeight[$x] <= $_POST['minWeight'] && $maxWeight[$x] >= $_POST['minWeight']) || ($minWeight[$x] <= $_POST['maxWeight'] && $maxWeight[$x] >= $_POST['maxWeight'])) {
                    // Create table rows after search
                    echo    '<tr>
                                <th scope="row">'. $id[$x] .'</th>
                                <td>'. $name[$x] .'</td>
                                <td>'. $weight[$x] .'</td>
                                <td>'. $height[$x] .'</td>
                                <td>'. $origin[$x] .'</td>
                                <td>'. $life_span[$x] .'</td>
                                <td>'. $temperament[$x] .'</td>
                                <td>'. $breed_group[$x] .'</td>
                                <td>'. $bred_for[$x] .'</td>
                            </tr>';
                }
            } elseif (($minWeight[$x] <= $_POST['minWeight'] && $maxWeight[$x] >= $_POST['minWeight']) || ($minWeight[$x] <= $_POST['maxWeight'] && $maxWeight[$x] >= $_POST['maxWeight'])) {
                    // Create table rows after search
                    echo    '<tr>
                                <th scope="row">'. $id[$x] .'</th>
                                <td>'. $name[$x] .'</td>
                                <td>'. $weight[$x] .'</td>
                                <td>'. $height[$x] .'</td>
                                <td>'. $origin[$x] .'</td>
                                <td>'. $life_span[$x] .'</td>
                                <td>'. $temperament[$x] .'</td>
                                <td>'. $breed_group[$x] .'</td>
                                <td>'. $bred_for[$x] .'</td>
                            </tr>';
                
            }
        }
    }
    echo '
            </tbody>
        </table>';

?>
<?php include "header&footer/footer.php" ?>