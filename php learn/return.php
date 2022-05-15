<?php

function avg(int $first, int $second){
    return ($first + $second) / 2;
}

function getgrades(int $grades){
    if ($grades >= 80){
        return "Excellent, you got A!";
    }
    else if ($grades >= 70){
        return "Good, you got B!";
    }
    else if ($grades >= 60){
        return "You got C!";
    }
    else if ($grades >= 50){
        return "You got D!";
    }
    else {
        return "You got E!";
    }
}

$scores = readline("enter your scores: ");
$absences = readline("enter your absences: ");

$average = avg($scores, $absences);
echo "Your average score : $average" . PHP_EOL;

$grade = getgrades($average);
echo $grade . PHP_EOL;