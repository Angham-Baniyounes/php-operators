<?php
//Q1. Write a PHP script to see if the specified year is a leap year or not 
function isLeep($y) {
    if(($y % 400 == 0) || ($y % 100 == 0) || ($y % 4 == 0)) {
        echo "$y : is a Leap Year.";
    } else {
        echo "$y : is not a Leap Year.";
    }
    echo "<br>";
}
isLeep(1991);
isLeep(2000);
echo "<hr>";

//Q2.Write a PHP script to check the season depending on set temperature if the
// temperature is below 20 we are in winter otherwise the season is summer.
function checkSeason($temp) {
    if($temp < 20) {
        echo "We are in winter 😍";
    } else {
        echo "We are in summer";
    }
    echo "<br>";
}
checkSeason(13);
checkSeason(24);
echo "<hr>";

//Q3. Write a PHP script to calculate the sum of the two mapped integers. If the two
// values are the same, then three times their sum is returned.
function getSum($fNum, $sNum) {
    if($fNum == $sNum) {
        $sum = ($fNum + $sNum) * 3;
        echo $sum;
    } else {
        echo "The Numbers are not have same values, Try again";
    }
    echo "<br>";
}
getSum(3, 3);
getSum(3, 4);
echo "<hr>";

//Q4. Write a PHP script to get the absolute difference between n and 100. If n is
// greater than 100, return triple the absolute difference.
function absNum($n) {
    if($n > 100) {
        echo ($n - 100) * 3;
    } else {
        echo abs($n - 100);
    }
    echo "<br>";
}
absNum(102);
absNum(33);
echo "<hr>";

//Q5. Write PHP script to check two integers, and return true if one is 30 or if their sum is 30.
function checkSum($num1, $num2) {
    if(($num1 == 30) || ($num2 == 30) || ($num1 + $num2 == 30)) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";
}
checkSum(10, 20);
checkSum(10, 1);
echo "<hr>";

//Q6. Write a PHP script to check an integer and return an integer if it is within 10 of 100 or 200.
function checkNum($num) {
    if((abs($num - 100) <= 10) || (abs($num - 200) <= 10)) {
        echo "is within 10";
    } else {
        echo "is without 10";
    }
    echo "<br>";
}
checkNum(103);
checkNum(19);
echo "<hr>";

//Q7.Write in PHP script to check if the given positive number is a multiple of 3 or a multiple of 7
function checkPosNum($n) {
    if ($n > 0) {
        if(($n % 3 == 0) || ($n % 7 == 0)) {
            echo "True";
        } else {
            echo "False";
        }
    } else {
        echo "Is a Negative Number, Try again";
    }
    echo "<br>";
}
checkPosNum(9);
checkPosNum(-3);
echo "<hr>";

//Q8. Write a PHP script to create a new string where "if" is added to the front of a
// particular string. If the series really begins with "if," then return the string unchanged.
function checkStartWithIf($str) {
    if(substr($str, 0, 2) == "if") {
        echo $str;
    } else {
        echo "if ".$str;
    }
    echo "<br>";
}
checkStartWithIf('if is here 🙄');
checkStartWithIf('without it');
echo "<hr>";

//Q9. Write a PHP script to remove the character in a specific position from a specific string. 
//The position selected in range 0..1 string length inclusive
function removeChar($str, $pos) {
    echo substr($str, 0, $pos).substr($str, $pos + 1, (strlen($str) - $pos));
    echo "<br>";
}
removeChar("Angham", 0);
removeChar("Angham", 4);
echo "<hr>";

//Q10. Write PHP script to check two integers if either is in the range 100..200 inclusive.
function checkRange($n1, $n2) {
    if(($n1 >= 100 && $n1 <= 200) || ($n2 >= 100 && $n2 <= 200)) {
        echo "The Numbers are in the range 100..200 inclusive";
    } else {
        echo "The Numbers are Not in the range 100..200 inclusive";
    }
    echo "<br>";
}
checkRange(150, 22);
checkRange(50, 22);
echo "<hr>";

//Q11. Write a PHP script to check if two valid values are in the range of 20.50
// inclusive. Returns true if 1 or another in the listed range is false.
function checkRangeValid($n1, $n2) {
    if(($n1 >= 20 && $n1 <= 50) || ($n2 >= 20 && $n2 <= 50)) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";
}
checkRangeValid(50, 22);
checkRangeValid(10, 2);
echo "<hr>";

//Q12. Write PHP script to check for the largest number among three integers
function getMax($n1, $n2, $n3) {
    if(($n1 > $n2) && ($n1 > $n3)) {
        echo "The largest number is $n1";
    } elseif (($n2 > $n1) && ($n2 > $n3)) {
        echo "The largest number is $n2";
    } elseif (($n3 > $n1) && ($n3 > $n1)) {
        echo "The largest number is $n3";
    } 
    else {
        echo "False";
    }
    echo "<br>";
}
getMax(13, 11, 24);
echo "<hr>";

//Q13. Write in PHP script to check the number closest to 100 between two integers.
// Return 0 if the two numbers are equal
function checkClosest($n1, $n2) {
    $int1 = abs($n1 - 100);
    $int2 = abs($n2 - 100);
    if($int1 == $int2) {
        echo "0";
    } else {
        if($int1 < $int2) {
            echo "$n1";
        } else {
            echo "$n2";
        }
    }
    echo "<br>";
}
checkClosest(91, 35);
checkClosest(9, 135);
echo "<hr>";

//Q14. Write a PHP script that accepts two integers and returns an integer if one of them is 5,
// their sum, or difference between them is 5
function isFiveHere($n1, $n2) {
    if(($n1 == 5) || ($n2 == 5) || ($n1 + $n2 == 5) || (abs($n1 - $n2) == 5)) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";
}
isFiveHere(3, 5);
isFiveHere(9, 2);
?>