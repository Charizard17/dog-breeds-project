<?php include "header&footer/header.php" ?>
<?php

    //__Get dog breeds from API and turn it __//
    //__to JSON file and save it to directory__//

    // // Get CSV file content
    // $content = file_get_contents("https://api.thedogapi.com/v1/breeds");

    // // Upload Directory
    // $upload_dir = "/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/";

    // // Create new file and write into
    // $fp = fopen($upload_dir."dog-breeds.JSON", "w");
    // fwrite($fp, $content);
    // fclose($fp);
    

    if (isset($_POST['submit'])) {
        echo "submit button clicked";
    }

?>
<?php include "header&footer/footer.php" ?>