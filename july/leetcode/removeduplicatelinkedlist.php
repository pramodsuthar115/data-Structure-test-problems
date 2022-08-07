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
        $this->obj->push("150",2);
        $this->obj->push("200",3);
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
        $fast = $this->obj->head;
        $slow = $this->obj->head;
            
        if($fast == null)
            return;
 
        while ($fast->next != null){
            $slow = $slow->next;
            $fast = $fast->next;
        }
        # delete the node
        $slow->next = $slow->next->next;
        print_r($this->obj->head); echo "</br>";
        return $this->obj->head;

        $head = $node = $this->obj->head;
        $i = $this->objLength - $n;
        // $node = new LinkedList();
        while($i>0){
            print_r($i);
            $node = $head->next;
            $i--;
        }
        print_r($node);   echo "</br>";
        $node->next = $head->next->next;
        print_r($this->obj->head); echo "</br>";

    }

}


$list = new Lists();
$list->removeNode(2);