<?php


          //Problem statement
          // input1 and input2 are two inputs from HTML textboxes 
        if (!(is_numeric($input1) || is_numeric($input2))) {
            echo "Invalid inputn";
            exit(0);
        }
        
        $hash1 = hash('md5', $input1, false);
        $hash2 = hash('md5', $input2, false);
        
        if ($hash1 != $hash2) {
            $hash1 = strtr($hash1, "abcd", "0123");
            $hash2 = strtr($hash2, "abcd", "0123");
            if ($hash1 == $hash2) {
                // Flag will be echoed here.
                
                
            }
        }
    




?>