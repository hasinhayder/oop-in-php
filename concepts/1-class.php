<?php
class Typewriter{
    public function __construct(){
        echo "Hey, I'm a typewriter\n";
    }

    public function doSomeType(){
        echo "And here I am typing...\n";
    }
}

$tw = new Typewriter();
$tw->doSomeType();
?>