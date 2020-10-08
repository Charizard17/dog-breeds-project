<?php include "header&footer/header.php" ?>
<?php
    // Get data from JSON
    $JSONcontent = file_get_contents("dog-breeds.JSON");

    // Turn JSON string to an array
    $JSONarray = json_decode($JSONcontent, true);

    // Define variables with checking if data missing or not
    for ($i = 0; $i < count($JSONarray); ++$i) {
        if (!empty($JSONarray[$i]['id'])) {$id[$i] = $JSONarray[$i]['id'];} else {$id[$i] = "–";}
        if (!empty($JSONarray[$i]['name'])) {$name[$i] = $JSONarray[$i]['name'];} else {$name[$i] = "–";}
        if (!empty($JSONarray[$i]['weight']['metric'])) {$weight[$i] = $JSONarray[$i]['weight']['metric'];} else {$weight[$i] = "–";}
        if (!empty($JSONarray[$i]['height']['metric'])) {$height[$i] = $JSONarray[$i]['height']['metric'];} else {$height[$i] = "–";}
        if (!empty($JSONarray[$i]['origin'])) {$origin[$i] = $JSONarray[$i]['origin'];} else {$origin[$i] = "–";}
        if (!empty($JSONarray[$i]['life_span'])) {$life_span[$i] = $JSONarray[$i]['life_span'];} else {$life_span[$i] = "–";}
        if (!empty($JSONarray[$i]['temperament'])) {$temperament[$i] = $JSONarray[$i]['temperament'];} else {$temperament[$i] = "–";}
        if (!empty($JSONarray[$i]['breed_group'])) {$breed_group[$i] = $JSONarray[$i]['breed_group'];} else {$breed_group[$i] = "–";}
        if (!empty($JSONarray[$i]['bred_for'])) {$bred_for[$i] = $JSONarray[$i]['bred_for'];} else {$bred_for[$i] = "–";}
    }

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
    for ($i = 0; $i < count($JSONarray); ++$i) {
        echo    '<tr>
                    <th scope="row">'. $id[$i] .'</th>
                    <td>'. $name[$i] .'</td>
                    <td>'. $weight[$i] .'</td>
                    <td>'. $height[$i] .'</td>
                    <td>'. $origin[$i] .'</td>
                    <td>'. $life_span[$i] .'</td>
                    <td>'. $temperament[$i] .'</td>
                    <td>'. $breed_group[$i] .'</td>
                    <td>'. $bred_for[$i] .'</td>
                </tr>';
    }
    echo '
        </tbody>
    </table>';


?>
<?php include "header&footer/footer.php" ?>