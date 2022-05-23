<?php

include "Node.php";

class SinglylinkedList
{
    protected $head;

    function __construct(){
        $this->head = null;
    }

    //function to add element in list
    function insertAtStart($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }

    //function to add element at end of the list
    function insertAtEnd($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }


    //function to insert element at perticular node
    function insertAtposition($data, $position)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;

        if ($position < 1) {
            echo "\n Position should be greater than zero";
        } else if ($position == 1) {
            $newNode->next = $this->head;
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null) {
                $newNode->next = $temp->next;
                $temp->next = $newNode;
            } else {
                echo "\nPrevious node is null";
            }
        }
    }

    //function to delete element from start of the list
    public function popFirst()
    {
        echo "After Deleting first element \n";
        if ($this->head != null) {
            if ($this->head->next == null) {
                $this->head = null;
            } else {
                $this->head = $this->head->next;
            }
        }
    }

    //function to delete element from end of the list
    public function popLast()
    {
        echo "After Deleting last element \n";
        if ($this->head != null) {
            if ($this->head->next == null) {
                //$this->head = null;
            } else {
                $temp = new Node();
                $temp = $this->head;
                while ($temp->next->next != null) {
                    $temp = $temp->next;
                }
                $temp->next = null;
            }
        }
    }

    //function to delete element at perticular position
    public function popAtPosition($position)
    {
        echo "After deleting element from $position \n";
        if ($position < 1) {
            echo "Position should be greater than zero \n";
        } elseif ($position == 1 && $this->head != null) {
            $this->head = $this->head->next;
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null && $temp->next != null) {
                $temp->next = $temp->next->next;
            } else {
                echo "The Node is already Null\n";
            }
        }
    }

    // function to display list elements
    function displayList()
    {
        //create a temp node pointing to head
        $temp = new Node();
        $temp = $this->head;

        /**
         * if the temp node is not null continue displaying the content and move to the 
         * next node till the temp becomes null
         */
        if ($temp != null) {
            echo "List elements are : \n";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";

            //If the temp node is null at the start, the list is empty
        } else {
            echo "List is empty \n";
        }
    }

    /**
     * Function to get the number of nodes
     * returns the nunber of nodes
     * non-parameterized function
     */
    public function count()
    {
        $count = 0;
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            while ($temp != null) {
                $count++;
                $temp = $temp->next;
            }
        }
        return $count;
    }

    /**
     * Function to check the list is empty
     * Printing true or false
     * non-parameterized function
     */
    public function isTheListEmpty()
    {
        if ($this->head == null) {
            echo "\ntrue";
        } else {
            echo "\nfalse";
        }
    }
}
?>