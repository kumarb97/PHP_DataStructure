<?php
include 'QueueArray.php';
class Main{

    function main(){
        $queuearray = new createQueue(4);
        $queuearray->EnQueue(1);
        $queuearray->EnQueue(2);
        $queuearray->EnQueue(3);
        $queuearray->EnQueue(4);
        $queuearray->displayQueue();
        $queuearray->DeQueue();
        $queuearray->displayQueue();

    }
}
$mainqueue = new Main();
$mainqueue->main();
?>