<?php
$myfile = fopen("../raps.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("../raps.txt"));
fclose($myfile);
?>