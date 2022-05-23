<?php

include 'C:\xampp\htdocs\phplearning\DataStructure\LinkedList/SinglyLinkedList.php';

class stack
{
    public $singlyLinkedList;
    public function __construct($object)
    {
        $this->singlyLinkedList = $object;
    }

    /**
     * Function to add new element
     * Passing data as parameter
     */
    public function push($data)
    {
        $this->singlyLinkedList->insertAtStart($data);
    }

    /**
     * Function to delete element from stack
     * Using LIFO method to delete
     * Non-Parameterized function 
     */
    public function pop()
    {
        $this->singlyLinkedList->popFirst();
    }

    /**
     * Function to calculate the size of a stack
     * Prints the size of the stack
     * Non-Parameterized function
     */
    public function size()
    {
        $count = $this->singlyLinkedList->count();
        echo "Size of stack is: " . $count;
    }

    /**
     * Function to print the elements of the stack
     * Non-Parameterized function
     */
    public function printStack()
    {
        $this->singlyLinkedList->displayList();
    }
}
$singlyLinkedList = new SinglylinkedList();
$stack = new stack($singlyLinkedList);
$stack->push(10);
$stack->push(25);
$stack->push(13);
$stack->printStack();
$stack->pop();
$stack->printStack();