<?php

    $arr = [5,10,12,25,30,45,50,75,80,100];
    $element=75;

    $found=1;

    for( $i=0 ; $i<count($arr); $i++ )
        {
            if( $arr[$i]==$element)
            {
                echo "Element $element found in the array index $i";
                $found=0;
                break;
            }

        }
    
    if ($found=0) {
        echo "Element $element not found in the array.";
    }


?>