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

    // if (file_exists("test.JSON") !== true) {
    //     // Get CSV file content
    //     $content = file_get_contents("https://api.thedogapi.com/v1/breeds");

    //     // Upload Directory
    //     $upload_dir = "/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/";

    //     // Create new file and write into
    //     $fp = fopen($upload_dir."test.JSON", "w");
    //     fwrite($fp, $content);
    //     fclose($fp);
    // }