<?php

require('./../../linkedlist-2.php');

class Lists{

    public function mergeArrayBackUp($head1,$head2){

        $dummy = new node(0);
        $last = $dummy;

        // print_r($last);
        // print_r($dummy); die;
        while (true){
            if($head1 == null){
                $last->next = $head2;
                break;
            }
            if($head2 == null) {
                $last->next = $head1;
                break;
            }
            print_r($head1->data); echo " head1->data</br>";
            if($head1->data <= $head2->data){
                $last->next = $head1;
                $head1 = $head1->next;
            } else {
                $last->next = $head2;
                $head2 = $head2->next;
            }
            $last = $last->next;
        }
        
        return $dummy->next;
    }
    public function mergeArray($head1,$head2){

        $dummy = new node(0);
        $last = $dummy;

        // print_r($last);
        // print_r($dummy); die;
        while (true){
            if($head1 == null){
                $last->next = $head2;
                break;
            }
            if($head2 == null) {
                $last->next = $head1;
                break;
            }
            print_r($head1->data); echo " head1->data</br>";
            if($head1->data <= $head2->data){
                $last->next = $head1;
                $head1 = $head1->next;
            } else {
                $last->next = $head2;
                $head2 = $head2->next;
            }
            $last = $last->next;
        }
        
        return $dummy->next;
    }

}


$linkedList = new LinkedList();
$linkedList->push("50");
$linkedList->push("100",1);
$linkedList->push("150",2);
$linkedList->push("200",3);

$linkedList1 = new LinkedList();
$linkedList1->push("80",3);
$linkedList1->push("150",4);
$linkedList1->push("180",5);
$linkedList1->push("250",6);
$linkedList1->push("280",7);

$list = new Lists();
print_r($linkedList); echo "</br>";
print_r($linkedList1); echo "</br>";
print_r($list->mergeArray($linkedList,$linkedList1));