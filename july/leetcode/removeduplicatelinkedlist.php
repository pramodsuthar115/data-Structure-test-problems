<?php

require('./../../linkedlist-2.php');

/* 
Given the head of a sorted linked list, delete all duplicates such that each element appears only once. Return the 
linked list sorted as well.
Example 2:
Input: head = [1,1,2]
Output: [1,2]
Example 2:
Input: head = [1,1,2,3,3]
Output: [1,2,3]

*/

class Lists{

    public $obj;
    public $objLength;
    public function __construct(){
        $this->objLength = 0;
        $this->obj = new LinkedList();
        $this->obj->push("50");
        $this->obj->push("100",1);
        $this->obj->push("100",1);
        $this->obj->push("100",1);
        $this->obj->push("100",1);
        $this->obj->push("100",1);
        $this->obj->push("100",1);
        $this->obj->push("150",2);
        $this->obj->push("200",3);
        $this->obj->push("200",3);
        $this->obj->push("200",3);
        $this->obj->push("200",3);
        $this->obj->push("200",3);
        $this->obj->push("240",3);
        $this->obj->push("250",4);
        $this->obj->push("250",4);
        $this->obj->push("300",5);
        $this->obj->push("350",6);
        $this->obj->push("380",7);
        $this->obj->PrintList();
        $this->deleteDuplicate();
    }

    public function getMiddleNode(){
        $middle = $head = $this->obj->head;;
        while($middle != null && $middle->next != null) {
            $head = $head->next;
            $middle = $middle->next->next;
        }
        return $head;
    }

    public function deleteDuplicate(){

        $current = $this->obj->head;
        while ($current){
            if($current->next && $current->data == $current->next->data){
                $pivot = $current;
                $newCurrent = $current->next;
                while($newCurrent && $pivot->data === $newCurrent->data){
                    $pivot->next = $newCurrent->next;
                    $newCurrent = $newCurrent->next;
                }

                // remove first node also that has same node value
                // if($previous) $previous->next = $pivot->next;
                // else $this->obj->head = $pivot->next;

                $current = $pivot->next;

            } else {
                // $previous = $current;
                $current = $current->next;
            }   
        }
        return $this->obj->head;
    }

}


$list = new Lists();
// $list->removeNode(2);