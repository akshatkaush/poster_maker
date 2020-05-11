<?php
   include 'Box.php';
include 'color.php';
include 'HorizontalAlignment.php';
include 'VerticalAlignment.php';
include 'TextWrapping.php';
include 'Point.php';
include 'Rectangle.php';


use GDText\Box;      
use GDText\Color;

      $name=$_POST["name"];
      $subject=$_POST["subject"];
      $message=$_POST["message"];

      




$im = imagecreatefromjpeg('web.jpg');
$backgroundColor = imagecolorallocate($im, 0, 18, 64);
imagefill($im, 0, 0, $backgroundColor);

$width = imagesx($im);
$height=imagesy($im);

$box = new Box($im);
$box->setFontFace( __DIR__.'/Roboto-Bold.ttf'); 
$box->setFontColor(new Color(255, 255, 255));
$box->setTextShadow(new Color(0, 0, 0, 50), 2, 2);
$box->setFontSize(65);
$box->setBox(0, 110, $width, 460);
$box->setTextAlign('center', 'top');
$box->setStrokeColor(new Color(0, 0, 0)); // Set stroke color
$box->setStrokeSize(2); // Stroke size in pixels
$box->draw($name);

$box = new Box($im);
$box->setFontFace( __DIR__.'/Roboto-Bold.ttf'); 
$box->setFontSize(43.5);
$box->setFontColor(new Color(255,255,255));
$box->setLineHeight(1);
$box->setTextShadow(new Color(0, 0, 0, 50), 5, 5);
$box->setBox(40, 220, $width-100, $height-200);
$box->setTextAlign('center', 'top');
$box->setStrokeColor(new Color(0, 0, 0)); // Set stroke color
$box->setStrokeSize(1.5);
$box->draw($message);

$box = new Box($im);
$box->setFontFace( __DIR__.'/BraderJohn.ttf'); 
$box->setFontSize(80);
$box->setFontColor(new Color(255, 255, 255));
$box->setTextShadow(new Color(0, 0, 0, 50), 0, -2);
$box->setBox(20, 20, $width-68, $height-21);
$box->setTextAlign('right', 'bottom');
$box->setStrokeColor(new Color(0, 0, 0)); // Set stroke color
$box->setStrokeSize(1.5);
$box->draw($subject);

header('Content-Disposition: Attachment;filename=image.png');
header("Content-type: image/png");
imagepng($im);


   
?>


<html>
   <body>
   
     
      
   
   </body>
</html>