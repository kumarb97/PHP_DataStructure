<?php
include "StackArray.php";
class StackArrayMain{

    function main(){

        $stackarray = new StackArray(5);
        $stackarray->push(10);
        $stackarray->push(4);
        $stackarray->push(45);
        
        $stackarray->displayStackElements();
        $stackarray->pop();
        $stackarray->displayStackElements();
    }
}

$main = new StackArrayMain();
$main->main();