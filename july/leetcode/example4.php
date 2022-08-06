<?php

// include linked list file
include("../linkedlist/example.php");

$list1 = new LinkedList();
$list1->insert(0);
// $list1->insert(9);
// $list1->insert(9);
// $list1->insert(9);
// $list1->insert(9);
// $list1->insert(9);
// $list1->insert(9);
// $list1->insert(9);

print_r($list1->head);
echo "</br>";

$list2 = new LinkedList();
$list2->insert(0);
// $list2->insert(9);
// $list2->insert(9);
// $list2->insert(9);
// $list2->insert(9);

print_r($list2->head);
echo "</br>";

$head1 = $list1->head;
$head2 = $list2->head;

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

$carry = 0;
$num1 = "";
$num2 = "";
while($head1){
    $num1 .=$head1->item;
    $head1 = $head1->next;
}
while($head2){
    $num2 .=$head2->item;
    $head2 = $head2->next;
}
$max = strlen($num1);
if(strlen($num2) > $max){
    $max = strlen($num2);
}

print_r($max." maxsddsdsd");
// add first element into linkedlist
$first = $num1[0]+$num2[0];
$value = $first%10;
$reminder = ($first - $value)/10;
$list3 = new ListNode($value);
$head = $list3;

for($i=1; $i<$max; $i++){
    $total = (!empty($num1[$i])?$num1[$i]:0)+(!empty($num2[$i])?$num2[$i]:0)+$reminder;
    $value = $total%10;
    $reminder = ($total - $value)/10;
    $list3->next = new ListNode($value);
    $list3 = $list3->next;
}

if($reminder){
    $list3->next = new ListNode($reminder);
    $list3 = $list3->next;
}

print_r($head);