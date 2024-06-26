<?php

// Get the values from the $_GET array
$time = $_GET['time'];
$session = $_GET['session'];

// Open the text file in append mode
$file = fopen("results.txt", "a");

// Write the values to the file
fwrite($file, "Time: $time, Session: $session\n");

// Close the file
fclose($file);

echo $time;
echo '<hr>';
echo $session;
?>

<h1>Thank you my dear for that test</h1>