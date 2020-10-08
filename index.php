<?php include "header&footer/header.php" ?>
<?php

    // Create table
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