<?php

$page = $_GET["page"];

$counterFile = "counter.txt";

$counter = 0;

if (file_exists($counterFile)) {

  $counter = file_get_contents($counterFile);

}

$counter++;

file_put_contents($counterFile, $counter);

echo $counter;

?>
