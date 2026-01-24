<?php

$var =10;
 if($var >0){
    echo "$var is more than 0 <hr>";
 }

 $age = 18;
 if($age >= 18){
    echo " you can vote <hr>";

 }else{
    echo "you cant vote <hr>";
 }

 $a = 50;
 $b = 20;

 if($a == $b){
    echo "a is equal b <hr>";
 }else if($a > $b){
    echo "a is greater than b <hr>";
 }else{
    echo " a is less than b <hr>";
 }

switch($age){
    case ($age>=0 && $age<18):
        echo "you are a minor <hr> ";
        break;
    case ($age>=18 && $age<65):
        echo "you are a young adult <hr> ";
        break;
    case ($age>25 && $age<65):
        echo "you are a middle age <hr> ";
        break;
    case ($age>=65):
        echo "you are a senior <hr>";
        break;
    default:
    echo "invalid value <hr>";
    break;
}

    $number = 1;

    while($number<=10){
      echo "The number is  $number <hr>";
    $number+=1;

    }

    $z = 1;
        do{
        echo "the number is  $z <hr>";
        $z++;
    }while($z<=5)

    

  



?>