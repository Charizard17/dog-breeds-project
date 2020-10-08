<?php include "header&footer/header.php" ?>
<?php
    // Get data from JSON
    $JSONcontent = file_get_contents("dog-breeds.JSON");

    // Turn JSON string to an array
    $JSONarray = json_decode($JSONcontent, true);

    // Define variables
    $id = $JSONarray[0]['id'];
    $name = $JSONarray[0]['name'];
    $weight = $JSONarray[0]['weight'];
    $height = $JSONarray[0]['height'];
    $origin = $JSONarray[0]['origin'];
    $life_span = $JSONarray[0]['life_span'];
    $temperament = $JSONarray[0]['temperament'];
    $breed_group = $JSONarray[0]['breed_group'];
    $bred_for = $JSONarray[0]['bred_for'];

    echo '
        <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
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
        <tbody>
        <tr>
            <th scope="row">'. $id .'</th>
            <td>'. $name .'</td>
            <td>'. $weight['metric'] .'</td>
            <td>'. $height['metric'] .'</td>
            <td>'. $origin .'</td>
            <td>'. $life_span .'</td>
            <td>'. $temperament .'</td>
            <td>'. $breed_group .'</td>
            <td>'. $bred_for .'</td>
        </tr>
        </tbody>
    </table>
    ';


?>
<?php include "header&footer/footer.php" ?>