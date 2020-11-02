<?php

// config des dates
$presentTime = new dateTime;

$destinationTime = new dateTime;
$destinationTime->setTimestamp('946707876');

// nouveau format date
echo $presentTime->format('M d Y A h i') . '<br>';
echo $destinationTime->format('M d Y A h i') . '<br><br>';

// différences entre les deux dates
$timeBetweenDate = $presentTime->diff($destinationTime);

echo $timeBetweenDate->y . " ans " . $timeBetweenDate->m . " mois " . $timeBetweenDate->d . " jours " .
$timeBetweenDate->h . " heures " . $timeBetweenDate->i . " minutes de différences entre les deux destinations.<br><br>";

// Bonus
$secondDiff = $timeBetweenDate->y * 31556926 + $timeBetweenDate->m * 2629743 +
$timeBetweenDate->d * 86400 + $timeBetweenDate->h * 3600 + $timeBetweenDate->i * 60;

$minutesDiff = $secondDiff / 60;
$neededFuel = $minutesDiff / 10000;

echo "Le voyage durera " . round($minutesDiff) . " minutes.<br>";
echo "Pour ce voyage, on a besoin de " . round($neededFuel) . " litres d'essence.";