<?php


/**
 *      *
 *      * *
 *      * * *
 *      * * * *
 *      * * * * *  
 */

 function firstPattern($length){
    for($i=0; $i<$length; $i++){
        for($j=0; $j<=$i; $j++){
            echo " * ";
        }
        echo "<br>";
    }
 }
// echo "First Pattern";
// firstPattern(10);




/**
 *              *
 *            * *
 *          * * *
 *        * * * *
 *      * * * * *  
 */

function secondPattern($length){
    for($i=0; $i<$length; $i++){
        //print spaces
        for($k=$length; $k>$i+1; $k--){
            echo " # ";
        }

        // Print stars
        for($j = 0; $j <= $i; $j++ ){
            echo " * ";
        }
        echo "<br>";
    }
 }
// echo "Second Pattern <br>";
// secondPattern(10);
// echo "<br>";


/** 
 *      * * * * *  
 *      * * * *
 *      * * *
 *      * *
 *      *
 */
function thirdPattern($length){
    for($i=0; $i<$length; $i++){
        //print spaces
        for($k=$length; $k>$i; $k--){
            echo " * ";
        }

        // // Print stars
        // for($j = 0; $j <= $i; $j++ ){
        //     echo " * ";
        // }
        echo "<br>";
    }
 }
// echo "Third Pattern <br>";
// thirdPattern(10);

/** 
 *      *  
 *      * * 
 *      * * * 
 *      * * * *  
 *      * * * * *  
 *      * * * * * *
 *      * * * * *  
 *      * * * *
 *      * * *
 *      * *
 *      *
 */
function fourthPattern($length){
    $mid = ceil($length/2);
    for($i=0; $i<$length; $i++){
        // Print stars
        if($i<$mid){
            for($j = 0; $j <= $i; $j++ ){
                echo " * ";
            }
        } else {
            for($j = $length; $j > $i ; $j-- ){
                echo " * ";
            }
        }
        echo "<br>";
    }
 }
// echo "Fourth Pattern <br>";
// fourthPattern(11);

/*
 *     - - * - - 
 *     - * * -  - - * - - 
 * 
 */

function fifthPattern($length){
    $mid = ceil($length/2);
    for($i=0; $i<$length; $i++){
        // Print stars
        if($i<$mid){
            for($k=$i; $k<$mid-1; $k++){
                echo " - ";
            }
            for($j = 0; $j <= $i; $j++ ){
                echo " # ";
            }
        } else {
            // for($j = $length; $j > $i ; $j-- ){
            //     echo " * ";
            // }
            for($k=0; $k<=$i-$mid; $k++){
                echo " - ";
            }
            for($j = $length; $j > $i; $j-- ){
                echo " # ";
            }
        }
        echo "<br>";
    }
 }

?>

<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h3>First Pattern</h3>
                <?php firstPattern(11)?>
            </div>
            <div class="col-3">
                <h3>Second Pattern</h3>
                <?php secondPattern(11)?>
            </div>
            <div class="col-3">
                <h3>Third Pattern</h3>
                <?php thirdPattern(11)?>
            </div>
            <div class="col-3">
                <h3>Fourth Pattern</h3>
                <?php fourthPattern(11)?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3">
                <h3>Fifth Pattern</h3>
                <?php fifthPattern(11   )?>
            </div>
        </div>
    </div>
</body>

</html>