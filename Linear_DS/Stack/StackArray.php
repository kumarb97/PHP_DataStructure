<?php
class StackArray
{
    protected $stackArray;
    protected $top;
    protected $size;

    public function __construct($size) {
        $this->top = -1;
        $this->stackArray = array();
        $this->size=$size;
    }

    public function isStackEmpty() {
        if ($this->top == -1)
        return true;
        return false;
    }

    public function isStackFull(){
        if($this->top < $this->size)
        return true;
        return false;
        }

    public function push($data) {
        if(self::isStackEmpty() || self::isStackFull()){
            $this->stackArray[++$this->top] = $data;
        }
        else{
            echo "Stack is full";
        }
    }

    public function pop() {
        if(self::isStackEmpty()){
            echo "Stack is empty";
        }
        else{
            echo "popped element is " . $this->stackArray[$this->top--];
            echo "\n";
        }
    }

    function peek(){
        if(self::isStackEmpty()){
            echo "Stack is empty";
        }
        else{
            echo "Top most element" .$this->stackArray[$this->top];
        }

    }

    function displayStackElements(){
        if(self::isStackEmpty()){
            echo "Stack is empty";
        }
        else{ 
            echo "Stack elements are ";
        for($i=$this->top;$i>=0;$i--){
            echo $this->stackArray[$i]. " ";
        }
        echo "\n";
    }
    }

}