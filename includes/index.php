<?php

function include_classes($classNames = array() ) {

    //spl_autoload_register( function ( $classNames = array() ) {
        foreach($classNames as $key) {
            include("include-".$key.".php");
        }
    //} );

    foreach($classNames as $key) {
        new $key;
    }

}

// Add class names here in the array.
$classNames = array(
    "db"
);

include_classes($classNames);

?>