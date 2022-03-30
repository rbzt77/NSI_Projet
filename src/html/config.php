<?php
system("killall fm_transmitter");
system("cd /home/pi/fm_transmitter && sox -t mp3 /musiques/'.$_POST["titre"].' -t wav - | ./fm_transmitter -f '.$_POST["frequence"].' -r -");
?>
