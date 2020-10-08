<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico"/>
    <title>Dog Breeds</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <a href="http://localhost/My-Works/dog-breeds-project/">home</a>
    <form class="container mt-5 mb-5" action="action.php" method="POST">
        <h2 class="text-center mb-5">Find your dog!</h2>
        <div class="input-group col mb-3">
            <h5 class="mr-3">Weight:</h5>
            <div class="input-group-prepend">
                <span class="input-group-text">Minimum</span>
            </div>
            <input type="text" class="form-control mr-3" name="minWeight" id="minWeight">
            <div class="input-group-prepend">
                <span class="input-group-text">Maximum</span>
            </div>
            <input type="text" class="form-control" name="maxWeight" id="maxWeight">
        </div>
        <div class="input-group col mb-3">
            <h5 class="mr-3">Height:</h5>
            <div class="input-group-prepend">
                <span class="input-group-text">Minimum</span>
            </div>
            <input type="text" class="form-control mr-3" name="minHeight" id="minHeight">
            <div class="input-group-prepend">
                <span class="input-group-text">Maximum</span>
            </div>
            <input type="text" class="form-control" name="maxHeight" id="maxHeight">
        </div>
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Search">
    </form>
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
    ?>