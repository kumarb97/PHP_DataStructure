<?php
include '/xampp/htdocs/phplearning/DataStructure/LinkedList/SinglyLinkedList.php';
class Queue
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
    public function enqueue($data)
    {
        $this->singlyLinkedList->insertAtStart($data);
    }

    /**
     * Function to delete element from queue
     * Using FIFO method to delete
     * Non-Parameterized function 
     */
    public function dequeue()
    {
        $this->singlyLinkedList->popFirst();
    }


    /**
     * Function to calculate the size of a queue
     * Prints the size of the queue
     * Non-Parameterized function
     */
    public function sizeOFQueue()
    {
        $count = $this->singlyLinkedList->count();
        echo "Size of Queue is: " . $count . "\n";
    }

    /**
     * Function to check the Queue is empty or not
     * Non-Parameterized function
     */
    public function isQueueEmpty()
    {
        $this->singlyLinkedList->isTheListEmpty();
    }

    /**
     * Function to print the elements of the queue
     * Non-Parameterized function
     */
    public function printQueue()
    {
        $this->singlyLinkedList->displayList();
    }
}
$singlyLinkedList = new SinglyLinkedList();
$queue = new Queue($singlyLinkedList);
$queue->isQueueEmpty();
$queue->enqueue(10);
$queue->enqueue(25);
$queue->enqueue(13);
$queue->printQueue();
$queue->sizeOfQueue();
$queue->dequeue();
$queue->printQueue();
$queue->sizeOFQueue();
?>