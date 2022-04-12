<?php

system("killall fm_transmitter");
$frequence = $_POST["frequence"];
$musique = $_POST["titre"];
system("python radio_php.py $musique $frequence");

?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Kalam" />
<link rel="stylesheet" href="pageWeb.css">
<title> Radio BZT</title>

</head>

<body>
<center>
<p><font face="Kalam" color="blue" size="15">Vous écoutez : <?php echo $_POST["titre"]; ?></font></p>
<br>
<p><font face="Kalam" color="blue" size="15">Sur la fréquence : <?php echo $_POST["frequence"] ?></font></p>

<img src="https://s1.qwant.com/thumbr/0x380/2/e/f8087a2f7984aa74a88f20e1cf4b5dda71b14a8539cb3a8652a294a0e57fa8/tumblr_onn734q6Rv1ue08b9o1_500.gif?u=https%3A%2F%2F66.media.tumblr.com%2F6bb79faf55461ee01a87d5bedb9081f1%2Ftumblr_onn734q6Rv1ue08b9o1_500.gif&q=0&b=1&p=0&a=1"
width="300" height="300">
</center>
</body>
<a href="index.php"><img src="https://s1.qwant.com/thumbr/0x380/8/d/eea9ad2cd995c068219183f26e2d9a2deb13d261e34d83d6a5d77b1c3626d6/vector-home-icon-symbol-sign.jpg?u=https%3A%2F%2Fstatic.vecteezy.com%2Fsystem%2Fresources%2Fpreviews%2F000%2F627%2F764%2Foriginal%2Fvector-home-icon-symbol-sign.jpg&q=0&b=1&p=0&a=0"
width="70" height="70" align="right"></a>
