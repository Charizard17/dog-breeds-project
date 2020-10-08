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
    <a href="">home</a>
    <form class="container mt-5 mb-5" action="action.php" method="POST">
        <h2 class="text-center mb-5">Find your dog!</h2>
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
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Search">
    </form>