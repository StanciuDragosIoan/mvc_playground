<?php
    /*
     * ksort => Sort an array by key
     * ksort ( array &$array [, int $sort_flags = SORT_REGULAR ] ) : bool
     * 
     * parameters: array (input array), sort_flags 
     *
     */

    $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
    ksort($fruits);
    foreach ($fruits as $key => $val) {
        echo "$key = $val\n";
    }