<?php
include "SinglyLinkedList.php";

class SinglyLinkedListMain
{
    function singlyLinkedListMain()
    {
        $singlyLinkedList = new SinglylinkedList();

        $singlyLinkedList->insertAtStart(3);
        $singlyLinkedList->insertAtStart(4);
        $singlyLinkedList->displayList();

        $singlyLinkedList->insertAtEnd(5);
        $singlyLinkedList->insertAtEnd(6);
        $singlyLinkedList->displayList();

        $singlyLinkedList->insertAtposition(2, 2);
        $singlyLinkedList->displayList();

        $singlyLinkedList->popFirst();
        $singlyLinkedList->displayList();

        $singlyLinkedList->popLast();
        $singlyLinkedList->displayList();

        $singlyLinkedList->popAtPosition(2);
        $singlyLinkedList->displayList();
    }
}

$main = new SinglyLinkedListMain();
$main->singlyLinkedListMain();
