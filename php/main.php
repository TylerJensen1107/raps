<?php
$myfile = fopen("../raps.txt", "r") or die("Unable to open file!");
echo file_get_contents("../raps.txt");
?>