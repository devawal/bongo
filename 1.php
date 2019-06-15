<?php

$a = array (
	"key1" => 1,
	"key2" => array (
		"key3" => 2,
		"key4" => array (
			"key5" => 4
		),
	),
);

function printDepth($array, $level = 1){
    foreach($array as $key => $value){
        //If $value is an array.
        if(is_array($value)){
        	echo $key . ": " . $level, '<br>';
            //We need to loop through it.
            printDepth($value, $level + 1);
        } else{
            //It is not an array, so print it out.
            echo $key . ": " . $value, '<br>';
        }
    }
}

printDepth($a);