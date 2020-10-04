<?php

$file = file_get_contents("counter.txt");

$visitors = $file;

$visitorsnew = $visitors + 1;

$filenew=fopen("counter2.txt", "w");

fwrite($filenew,$visitorsnew);

echo "You've had $visitorsnew visitors.";


?>