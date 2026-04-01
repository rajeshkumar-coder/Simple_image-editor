<?php
$counterFile = "counter.txt";

// Create the file if it doesn't exist
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 0);
}

// Read the current count
$visitCount = (int) file_get_contents($counterFile);

// Return the count
echo $visitCount;
?>
