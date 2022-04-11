<?php

system("killall fm_transmitter");
$frequence = $_POST["frequence"];
$musique = $_POST["titre"];
system("python radio_php.py $musique $frequence");
header("refresh:1;url=yasmine.php");

?>
