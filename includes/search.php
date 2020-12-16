<?php
    // Search filter
    if (isset($_POST['submit'])) {

        $filtered = $dogBreedArray;
        
        $filtered = hasContainWords('breed_name', $filtered);
        $filtered = hasContainTerms('minWeight', $filtered, 'minWeight', 'maxWeight');
        $filtered = hasContainTerms('maxWeight', $filtered, 'minWeight', 'maxWeight');
        $filtered = hasContainTerms('minHeight', $filtered, 'minHeight', 'maxHeight');
        $filtered = hasContainTerms('maxHeight', $filtered, 'minHeight', 'maxHeight');
        $filtered = hasContainWords('temperament', $filtered);

        // Create table
        tableRowCreator($filtered);
    } else {
        // Create table
        tableRowCreator($dogBreedArray);
    }