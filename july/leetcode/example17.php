<?php

require('./../../linkedlist-2.php');


/* Given the head of a singly linked list, return the middle node of the linked list.
If there are two middle nodes, return the second middle node.
Example 1:
Input: head = [1,2,3,4,5]
Output: [3,4,5]
Explanation: The middle node of the list is node 3.
Example 2:
Input: head = [1,2,3,4,5,6]
Output: [4,5,6]
Explanation: Since the list has two middle nodes with values 3 and 4, we return the second one.

Constraints:
The number of nodes in the list is in the range [1, 100].
1 <= Node.val <= 100 */

class Lists{

    public $obj;
    public $objLength;
    public function __construct(){
        $this->objLength = 0;
        $this->obj = new LinkedList();
        $this->obj->push("50");
        $this->obj->push("100",1);
        $this->obj->push("150",2);
        $this->obj->push("200",3);
        $this->obj->push("250",4);
        $this->obj->push("300",5);
        $this->obj->push("350",6);
        $this->obj->push("380",7);
        $this->obj->PrintList();
        $this->countLength();
        $this->getMiddleNode();
    }
    public function countLength(){
        $current = $this->obj->head;
        while($current != null){
            $current = $current->next;
            $this->objLength++;
        }
    }

    public function getMiddleNode(){

        $middle = $head = $this->obj->head;;
        while($middle != null && $middle->next != null) {
            $head = $head->next;
            $middle = $middle->next->next;
        }

        return $head;
    }

    public function removeNode($n){
        
        $fast = $this->obj->head;
        $slow = $this->obj->head;
        # advance fast to nth position
        for ($i =0; $i<$n;$i++){
            $fast = $fast->next;
        }
            
        if($fast == null)
            return $this->obj->head->next;
        # then advance both fast and slow now they are nth postions apart
        # when fast gets to None, slow will be just before the item to be deleted
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