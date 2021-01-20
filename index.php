<?php
//1- Write php script to calculate Electricity bill

$units = 50;
if($units <= 50 && $units >=0){
    echo 2.50."JD";
}elseif ($units <= 100 && $units >= 51){
    echo 5.00."JD";
}elseif ($units <= 249 && $units >=101){
    echo 6.20."JD";
}elseif ($units >= 250){
    echo 7.50."JD";
}else {
    echo "Wrong format for units";
}

//2- Write php script to make a calculator



$operator = '+';
$numberOne = 2;
$numberTwo = 2;
switch($operator){
    case '+':
        echo $numberOne + $numberTwo;
        break;
    case '-':
        echo $numberOne - $numberTwo;
        break;
    case '*':
        echo $numberOne * $numberTwo;
        break;
    case '/':
        echo $numberOne / $numberTwo;
        break;
    default:
        echo "operator is wrong";
}


//3-Write php script to check if a person is eligible to vote
function isEligible ($age){
    if($age >= 18){
        echo "person is eligible to vote";
    }else if ($age <= 18 && $age >=0) {
        echo "person is illegible to vote";
    }else {
        echo "Entered age is wrong";
    }
}

isEligible(18);


//4-Write php script to check whether a number is positive,
//negative or zero
$weather = 10;

if(is_numeric($weather)){
    if($weather == 0){
        echo "It is cold";
    }else if ($weather < 0 ) {
        echo "It is about to snow";
    }else {
        echo "You can take a walk";
    }
}else {
    echo "Entered value is not a number";
}