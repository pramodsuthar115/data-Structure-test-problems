<?php


// function to get no of days till month in a year
function getDaysOfYear($year, $noOfMonths, $fromMonth = 1){
    if($noOfMonths > 12 || $fromMonth > 12)
        return "Invalid no of month";

    $isLeapYear = false;
    if($year %4 == 0){
        $isLeapYear = true;
    }
    $monthsOf31Days = [1,3,5,7,8,10,12];
    $noOfDays = 0;
    // by forloop
    for($i=$fromMonth;$i<=$noOfMonths;$i++){
        if(in_array($noOfMonths,$monthsOf31Days)){
            $noOfDays += 31;
        } elseif($i == 2) {
            $noOfDays += $isLeapYear ? 28 : 29;
        } else {
            $noOfDays += 30;
        }
    }
    return $noOfDays;
}

 

print_r(getDaysOfYear(2022,1, 5));