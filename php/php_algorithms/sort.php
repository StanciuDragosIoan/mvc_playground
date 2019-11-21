<?php
    /*
     * sort ( array &$array [, int $sort_flags = SORT_REGULAR ] ) : bool
     * 
     * parameters: array (input array), sort_flags 
     * 
     * Sorting type flags:

        SORT_REGULAR - compare items normally (don't change types)
        SORT_NUMERIC - compare items numerically
        SORT_STRING - compare items as strings
        SORT_LOCALE_STRING - compare items as strings, based on the current locale. It uses the locale, which can be changed using setlocale()
        SORT_NATURAL - compare items as strings using "natural ordering" like natsort()
        SORT_FLAG_CASE - can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively
     *  
     * 
     * 
     *  This function assigns new keys to the elements in array. It will remove any existing keys that may have been assigned, rather than just reordering the keys.
     */


    //examples

    /*
        $fruits = array("lemon", "orange", "banana", "apple");
        sort($fruits);
        foreach ($fruits as $key => $val) {
            echo "fruits[" . $key . "] = " . $val . "\n";
        }
    */
    

    /*
        $fruits = array(
            "Orange1", "orange2", "Orange3", "orange20"
        );
        sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
        foreach ($fruits as $key => $val) {
            echo "fruits[" . $key . "] = " . $val . "\n";
        }
    */