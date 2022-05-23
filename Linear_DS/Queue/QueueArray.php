<?php

class CreateQueue
{
    protected $size;
    protected $front;
    protected $rear;

    function __construct($size)
    {
        $this->size = $size;
        $this->front = -1;
        $this->rear = -1;
        $queue = array();
    }

    // create a function to check whether 
    // the queue is empty or not 
    function isQueueEmpty()
    {
        if ($this->front == -1 && $this->rear == -1) {
            return true;
        } else
            return false;
    }

    // create a function to check whether 
    // the queue is full or not
    function isQueueFull()
    {
        if ($this->rear == $this->size - 1) {
            return true;
        } else
            return false;
    }

    // create a function to add new element
    function EnQueue($data)
    {
        if (self::isQueueFull()) {
            echo "Queue is full";
        } else {
            if ($this->front == -1) {
                $this->front++;
            }
            $this->queue[++$this->rear] = $data;
        }
    }

    // create a function to delete a front element
    function DeQueue()
    {
        if (self::isQueueEmpty()) {
            echo "Queue is Empty";
        } else{
            echo "removed element is " . $this->queue[$this->front++] . "\n";
        }
    }

    // create a function to display Queue
    function displayQueue()
    {
        if (self::IsQueueEmpty()) {
            echo "Queue is Empty";
        } else {
            for ($i = $this->front; $i <= $this->rear; $i++) {
                echo $this->queue[$i] . " ";
            }
            echo "\n";
        }
    }
}
