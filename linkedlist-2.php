<?php
//node structure
class Node
{
    public $data;
    public $next;
}

class LinkedList
{
    public $head;

    //constructor to create an empty LinkedList
    public function __construct()
    {
        $this->head = null;
    }


    public function push($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }

    public function pop()
    {
        $current = $this->head;
        $previous = $this;

        // print_r($current);
        $i=0;
        while($current->next != null) {
            $i++;
            $previous = $current;
            $current = $current->next;
            
        }

        // $temp = new Node();
        // $temp = $previous;
        
    }

    public function popsdsd(){
        
        if($this->head != null){
            // $CurrentNode = new Node();
            $lastNode = $this;
            $CurrentNode = $this;

            while($CurrentNode->data != null)
            {
                $lastNode = $CurrentNode;
                $CurrentNode = $CurrentNode->next;
            }
            // print_r($CurrentNode); die;
            // $sn = 0;
            // while($CurrentNode->next != null) {
            //     $sn++;
            //     echo "\n ".$sn;
            //     print_r($CurrentNode->next);
            //     echo "</br>";
            //     print_r($lastNode);
            //     echo "</br>";
            //     // die;
            //     $lastNode = $CurrentNode->next;
            //     $CurrentNode = $lastNode; 
                
            // }
        } else {
            echo "The list is empty.";
        }
    }

    public function emptyNode(){
        $this->head = null;
    }

    //display the content of the list
    public function PrintList() {
        $temp = new Node();
        $temp = $this->head;
        if($temp != null) {
            echo "The list contains";
            while(!empty($temp)) {
                echo $temp->data." ";
                $temp = $temp->next;
            }
        } else {
            echo "The list is empty.";
        }

        echo "</br>";
    }
};

// $MyList = new LinkedList();
// $MyList->push(50);
// $MyList->push(100);

// $MyList->push(150);
// $MyList->push(200);
// $MyList->push(250);
// $MyList->push(300);

// $MyList->PrintList();
// echo "</br>";
// $MyList->pop();
// echo "</br>";

// $MyList->PrintList();

// Function to empty linked list
// $MyList->emptyNode();

// print_r($MyList->head);