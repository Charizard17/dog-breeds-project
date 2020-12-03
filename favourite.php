<?php include "header&footer/header.php" ?>
<!DOCTYPE html>
<html>
<body>
    <!-- <form action="favourite.php" method="POST">
        <input class="button" name="reset" type="submit" value="reset">
    </form> -->
    <script>
        window.onload = function() {
            if (!window.location.hash) {
                window.location = window.location + '#loaded';
                window.location.reload();
            }
        }
        // function reset() {
        //     if (readCookie("my-favourite") !== null) {
        //     <?php
        //             unset($_COOKIE['my-favourite']);
        //             setcookie('my-favourite', '', time() - 3600, '/'); // empty value and old timestamp
        //     ?>
        //     }
        // }
    </script>
</body>
</html>
<?php
    echo '<h2 class="text-center">My Favourite Dog Breeds</h2>';

    $myCookieString = $_COOKIE["my-favourite"];
    $myFavouriteArray = explode(',', $myCookieString);
    sort($myFavouriteArray);

    $newArray = [];
    $index = 0;
    for ($i = 0; $i < count($dogBreedArray); ++$i) {
        if (in_array($dogBreedArray[$i]['id'], $myFavouriteArray)) {
            $newArray[$index] = $dogBreedArray[$i];
            ++$index;
        }
    }

    // function resett() {
    //     if (isset($_POST['submit'])) {
    //         setcookie('my-favourite', '');
    //         //setcookie('my-favourite', '', time() - 3600, '/'); // empty value and old timestamp
    //     }
    // }

    // Create table
    if ($newArray) {
        echo "<br><h class='ml-3'><b>". count($newArray) ."</b> dog breed found.</h5><br>";
            echo '
                <table class="table table-striped">
                    <thead>
                        <tr>
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
            for ($index = 0; $index < count($newArray); ++$index) {
                echo    '<tr>
                            <th scope="row">'. $newArray[$index]["id"] .'</th>
                            <td>'. $newArray[$index]["breed_name"] .'</td>
                            <td><img style="width: 64px; height: 64px;" src="https://i.imgflip.com/db5xf.jpg"></img></td>
                            <td>'. $newArray[$index]["weight"]["metric"] .'</td>
                            <td>'. $newArray[$index]["height"]["metric"] .'</td>
                            <td>'. $newArray[$index]["origin"] .'</td>
                            <td>'. $newArray[$index]["life_span"] .'</td>
                            <td>'. $newArray[$index]["temperament"] .'</td>
                            <td>'. $newArray[$index]["breed_group"] .'</td>
                            <td>'. $newArray[$index]["bred_for"] .'</td>
                        </tr>';
            }
            echo '
                </tbody>
            </table>';
    } else {
        echo "Not Found";
    }
    
?>
<?php include "header&footer/footer.php" ?>