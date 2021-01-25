<?php

    // check if JSON file exist, if not create new one
    if (file_exists("dog-breeds.JSON") !== true) {
        // Get CSV file content
        $content = file_get_contents("https://api.thedogapi.com/v1/breeds");

        // Turn content string to an array
        $contentArray = json_decode($content, true);

        // reduce image size from api, before creating JSON file
        for ($i = 0; $i < count($contentArray); ++$i) {
            if ($contentArray[$i]['image']['width']) {
                $contentArray[$i]['image']['width'] = 250;
            }
            if ($contentArray[$i]['image']['height']) {
                $contentArray[$i]['image']['height'] = 250;
            }
        }

        // Turn content array back to string
        $content = json_encode($contentArray, true);


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