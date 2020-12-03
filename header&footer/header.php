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
    <a href="http://localhost/My-Works/dog-breeds-project/index2.php">home2</a>
    <a href="http://localhost/My-Works/dog-breeds-project/favourite.php">favourite</a>
    <br>
    <?php

        // check if JSON file exist, if not create new one
        if (file_exists("dog-breeds.JSON") !== true) {
            // Get CSV file content
            $content = file_get_contents("https://api.thedogapi.com/v1/breeds");

            // Upload Directory
            $upload_dir = "/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/";

            // Create new file and write into
            $fp = fopen($upload_dir."dog-breeds.JSON", "w");
            fwrite($fp, $content);
            fclose($fp);
        }

        // Get data from JSON
        $JSONcontent = file_get_contents("dog-breeds.JSON");
        
        // Turn JSON string to an array
        $JSONarray = json_decode($JSONcontent, true);

        $dogBreedArray = [];
        // // Define variables with checking if data missing or not
        for ($i = 0; $i < count($JSONarray); ++$i) {
            if (!empty($JSONarray[$i]['id'])) {$dogBreedArray[$i]['id'] = $JSONarray[$i]['id'];} else {$dogBreedArray[$i]['id'] = "–";}
            if (!empty($JSONarray[$i]['name'])) {$dogBreedArray[$i]['breed_name'] = $JSONarray[$i]['name'];} else {$dogBreedArray[$i]['breed_name'] = "–";}
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
                                <td><img style="width: 64px; height: 64px;" src="https://i.imgflip.com/db5xf.jpg"></img></td>
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
    ?>
    <script>
        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }

        let myClickedElementArray = readCookie('my-favourite');
        myClickedElementArray = myClickedElementArray.split(",");

        function saveClickedElement(clicked_element_id) {
            if (myClickedElementArray.includes(clicked_element_id) == false) {
                myClickedElementArray.push(clicked_element_id);

                var date = new Date();
                date.setTime(date.getTime() + 7 * 24 * 3600 * 1000);

                document.cookie = "my-favourite=" + myClickedElementArray + "; path=/;expires = " + date.toGMTString();
            }
        }

    </script>