<?php

// Create a for loop to brute force the right numbers as per the conditions
for ($i = 0; $i < 10000; $i++) {
    for ($j = 0; $j < 10000; $j++) {
	       //check if the the input is numeric
        if (!(is_numeric($i) || is_numeric($j))) {
            echo "Invalid inputn";
            exit(0);
        }
        //MD% hash them
        $hash1 = hash('md5', $i, false);
        $hash2 = hash('md5', $j, false);
         //compare the hashes
        if ($hash1 != $hash2) {
		       //replace the string chars
            $hash1 = strtr($hash1, "abcd", "0123");
            $hash2 = strtr($hash2, "abcd", "0123");
            if ($hash1 == $hash2) {
                // Flag will be echoed here.
                echo $i . "this";
                echo $j . "this";
            }
        }
    }
}


?>