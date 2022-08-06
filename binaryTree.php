<?php 


class Node{
    public $left;
    public $right;
    public $data;

    public function __construct($data){
        $this->left = null;
        $this->right = null;
        $this->data = $data;
    }


    public function printTree(){
        $node = $this;
        // print_r($node->left);
                // echo "</br>";
                
        foreach($node as $key => $each){
            if(!empty($each->left)){
                print_r($each->left);
                echo "</br>";
            } elseif(!empty($each->right)){
                print_r($each->right);
                echo "</br>";
            } else {
                print_r($each);
            }
        }

    }
}

$root = new Node(10);
// print_r($root);
// echo "</br>";
$root->left = new Node(8);
$root->right = new Node(2);
// print_r($root);
// echo "</br>";
$root->left->left = new Node(3);
$root->left->right = new Node(5);
// print_r($root);
// echo "</br>";
$root->right->right = new Node(2);
$root->right->left = new Node(1);
$root->right->left->left = new Node(1);
$root->right->left->right = new Node(1);
// print_r($root);
// echo "</br>";

$root->printTree();