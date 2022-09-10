<?php
require_once 'RgbClass.php';
$res = new RgbClass();
$myClass = new RgbClass(233,222,100);
$newColor = new RgbClass(155,222,155);

$red_color = $myClass->getRed(255);
$green_color = $myClass->getGreen(100);
$blue_color = $myClass->getBlue(10);
echo 'Equals: '.$myClass->equals().'<br>';
echo 'Mix'.$res->mix();
?>
<h1 style="color: rgb(<?php echo $red_color.','.$green_color.','.$blue_color;?>);">Hello World!!!</h1>
