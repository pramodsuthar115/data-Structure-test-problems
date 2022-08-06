<?php

class node{
    public $item;
    public $next;

    // public function __construct($item){
    //     $this->item = $item;
    //     $this->next = NULL;
    // }
}

class LinkedList{

    public $head;
    public function __construct(){
        $this->head = NULL;
    }

    public function insert($data, $index=null){
        $newNode = new Node();
        $newNode->item = $data;
        $newNode->next = NULL;
        

        if($this->head == NULL){
            // block to add at first index
            $this->head = $newNode;
        } else {
            if($index != NULL){
                // block to add new value at first index
                $current = $this->head;
                // $previous = $current->next;
                
                for($i = 0; $i < $index -2; $i++) {
                    $current = $current->next;
                }
                // print_r($curre
                $newNode->next = $current->next;
                $current->next = $newNode;
                
            } else {
                $temp = $this->head;
                while($temp->next != NULL){
                    $temp = $temp->next;
                }
                $temp->next = $newNode;
            }
        }
    }

    
    public function getLength(){
        $count = 0;
        $current = $this->head;
        while($current != null){
            $current = $current->next; 
            $count++;
        }
    }

    public function deleteFirst(){
        $temp = $this->head;
        $this->head = $temp->next;
    }

    public function deleteLast(){
        $temp = $this->head;
        $current = $temp->next;
        while($current->next != NULL){
            $current = $current->next;
            $temp = $temp->next;
        }
        $temp->next = NULL;
    }

    public function printReverse($head){
        if($head == NULL)
            return;
        $this->printReverse($head->next);
        print_r($head->item." => ");
    }

    public function pop($position=null){

        echo "</br>";
        $previous = new Node();
        $previous = $this->head;
        $temp = new Node();
        $temp = $previous->next;
        for($i = 0; $i < $position -1; $i++) {
            $temp = $temp->next;
            $previous = $previous->next;
        }
        $previous->next = $temp->next;   
    }

    public function traverseLinkedList(){
        $temp = $this->head;
        // print_r($temp); 
        while($temp != NULL){
            print_r($temp->item.' ==> ');
            $temp = $temp->next;
        }
        echo "</br>";
    }
}


// $linkedlist = new LinkedList();
// $linkedlist->insert(5);
// $linkedlist->insert(6,0);
// $linkedlist->insert(7);
// $linkedlist->insert(8);
// $linkedlist->insert(9);
// $linkedlist->insert(10);
// $linkedlist->insert(11);
// $linkedlist->insert(12);
// $linkedlist->insert(15);
// print_r($linkedlist);
// echo "</br>";
// echo "</br>";
// $linkedlist->traverseLinkedList();
// $linkedlist->insert(13, 5);
// $linkedlist->insert(14, 3);

// $linkedlist->traverseLinkedList();
// $linkedlist->deleteLast();
// $linkedlist->traverseLinkedList();
// $linkedlist->pop();
// $linkedlist->traverseLinkedList();