<?php

/** Create Node Class **/
class Node
{
    public $parent = null;
    public $left = null;
    public $right = null;
    public $data = null;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function __toString()
    {
        return $this->data;
    }
}
?>