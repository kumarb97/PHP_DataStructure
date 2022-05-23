<?php

include '../SinglyLinkedList/Node.php';

class CircularSinglyLinkedList
{
    public $head;
    public function __construct()
    {
        $this->head = null;
    }

    /**
     * Function to add data into the list
     * Passing the data as parameter
     */
    public function insertAtLast($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->head == null) {
            $this->head = $newNode;
            $newNode->next = $this->head;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != $this->head) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->next = $this->head;
        }
    }

    /**
     * Function to add a data at first (head)
     * Passing data as parameter
     */
    public function insertAtFirst($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->head == null) {
            $this->head = $newNode;
            $newNode->next = $this->head;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != $this->head) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }

    /**
     * Function to add a data at a given position
     * Passing data and position as parameters
     */
    public function insertAtPosition($data, $position)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        $temp = $this->head;
        $noOfElements = 0;

        if ($temp != null) {
            $noOfElements++;
            $temp = $temp->next;
        }
        while ($temp != $this->head) {
            $noOfElements++;
            $temp = $temp->next;
        }

        if ($position < 1 || $position > ($noOfElements + 1)) {
            echo "\nInvalid Position.";
        } elseif ($position == 1) {
            if ($this->head == null) {
                $this->head = $newNode;
                $this->head->next = $this->head;
            } else {
                while ($temp->next != $this->head) {
                    $temp = $temp->next;
                }
                $newNode->next = $this->head;
                $this->head = $newNode;
                $temp->next = $this->head;
            }
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                $temp = $temp->next;
            }
            $newNode->next = $temp->next;
            $temp->next = $newNode;
        }
    }

    /**
     * Function to delete a data at first (head)
     * Non-Parameterized Function
     */
    public function deleteFirst()
    {
        if ($this->head != null) {
            if ($this->head->next == $this->head) {
                $this->head = null;
            } else {
                $temp = new Node();
                $temp = $this->head;
                while ($temp->next != $this->head) {
                    $temp = $temp->next;
                }
                $this->head = $this->head->next;
                $temp->next = $this->head;
            }
        }
    }

    /**
     * Function to delete a data at last
     * Non-Parameterized Function
     */
    public function deleteLast()
    {
        if ($this->head != null) {
            if ($this->head->next == $this->head) {
                $this->head = null;
            } else {
                $temp = new Node();
                $temp = $this->head;
                while ($temp->next->next != $this->head) {
                    $temp = $temp->next;
                }
                $temp->next = $this->head;
            }
        }
    }

    /**
     * Function to delete a data at given position
     * Passing the Postiion as the Parameter
     */
    public function deleteAtPosition($position)
    {
        $temp = $this->head;
        $noOfElements = 0;

        if ($temp != null) {
            $noOfElements++;
            $temp = $temp->next;
        }
        while ($temp != $this->head) {
            $noOfElements++;
            $temp = $temp->next;
        }

        if ($position < 1 || $position > $noOfElements) {
            echo "\nInvalid Position.";
        } elseif ($position == 1) {
            if ($this->head->next == $this->head) {
                $this->head = null;
            } else {
                while ($temp->next != $this->head) {
                    $temp = $temp->next;
                }
                $this->head = $this->head->next;
                $temp->next = $this->head;
            }
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                $temp = $temp->next;
            }
            $temp->next = $temp->next->next;
        }
    }

    /**
     * Function to search a data from the list
     * Passing the data as parameter
     */
    public function search($data)
    {
        $temp = new Node();
        $temp = $this->head;
        $found = 0;
        $i = 0;

        if ($temp != null) {
            while (true) {
                $i++;
                if ($temp->data == $data) {
                    $found++;
                    break;
                }
                $temp = $temp->next;
                if($temp == $this->head)
                {
                    break;
                }
            }
            if ($found == 1) {
                echo $data . " is found at Position = " . $i . ".\n";
            } else {
                echo $data . " is not found in the list.\n";
            }
        } else {
            echo "The list is empty.\n";
        }
    }

    /**
     * Function to print the Elements of the list
     * Non Parameterized Function
     */
    public function printList()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "The list contains: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
                if ($temp == $this->head) {
                    break;
                }
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }

    /**
     * Function to insert new key after a key
     * Non-Parameterized function
     */
    public function insertAfter()
    {
        $insertAfter = readline('Enter a key: ');
        $newKey = readline('Enter a new key to insert: ');
        $newNode = new Node();
        $newNode->data = $newKey;
        $temp = $this->head;
        while ($temp->data != $insertAfter) {
            $temp = $temp->next;
        }
        if ($temp->data == $insertAfter) {
            $newNode->next = $temp->next;
            $temp->next = $newNode;
        } else {
            echo "key not found.";
        }
    }

    /**
     * Function to delete a particular key
     * Passing the key as parameter
     */
    public function deleteKey($key)
    {
        $present = $previous = $this->head;
        while ($present->data != $key) {
            $previous = $present;
            $present = $present->next;
        }
        if ($present == $previous) {
            $this->head = null;
            //$this->head->next = null;
        }
        $previous->next = $present->next;
    }

}
