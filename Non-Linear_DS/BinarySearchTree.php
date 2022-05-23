<?php

include "Node.php";

/** Program for Create BinarySearchTree  **/

class BinarySearchTree
{
    protected $root;
    function __construct()
    {
        $this->root = null;
    }

    /**
     * Function to Insert the node
     * Passing parameters newNode and its root as parameters
     */
    protected function insertData(&$new, &$node)
    {
        if ($node == null) {
            $node = $new;
            return;
        }
        if ($new->data <= $node->data) {
            if ($node->left == null) {
                $node->left = $new;
                //$new->parent = $node;
            } else {
                $this->insertData($new, $node->left);
            }
        } else {
            if ($node->right == null) {
                $node->right = $new;
                //$new->parent = $node;
            } else {
                $this->insertData($new, $node->right);
            }
        }
    }

    /**
     * Function to search a target data
     * Passing the data and the root as parameters
     * Return 1 if found and 0 if not found
     */
    protected function searchData($target, $node)
    {
        if ($target == $node->data) {
            return 1;
        } else if ($target > $node->data && isset($node->right)) {
            return $this->searchData($target, $node->right);
        } else if ($target <= $node->data && isset($node->left)) {
            return $this->searchData($target, $node->left);
        }
        return 0;
    }

    /**
     * Function to traverse the tree
     * Passing the node as the parameter
     * Printing the data of the nodes
     */
    public function traverseTree($node)
    {
        if ($node->left != null) {
            $this->traverseTree($node->left);
        }
        if ($node->right != null) {
            $this->traverseTree($node->right);
        }
        echo $node->data . " ";
    }

    public function insert($node)
    {
        $this->insertData($node, $this->root);
    }

    public function search($item)
    {
        return $this->searchData($item, $this->root);
    }

    public function traverse()
    {
        $this->traverseTree($this->root);
    }
}

// Add Data in Nodes
$node1 = new Node(92);
$node2 = new Node(39);
$node3 = new Node(15);
$node4 = new Node(49);
$node5 = new Node(11);
$node6 = new Node(2);


$binarySearchTree = new BinarySearchTree();
$binarySearchTree->insert($node1);
$binarySearchTree->insert($node2);
$binarySearchTree->insert($node3);
$binarySearchTree->insert($node4);
$binarySearchTree->insert($node5);
$binarySearchTree->insert($node6);
$binarySearchTree->traverse();

$check = $binarySearchTree->search(25);

if ($check == 1) {
    echo "\nSearch Data is Found in the Tree.";
} else {
    echo "\nSearch Data is Not Found in the Tree";
}
?>