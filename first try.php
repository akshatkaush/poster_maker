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
if( $_POST["name"] || $_POST["email"] ) {
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
$box->setFontSize(85);
$box->setBox(0, 110, $width, 460);
$box->setTextAlign('center', 'top');
$box->setStrokeColor(new Color(0, 0, 0)); // Set stroke color
$box->setStrokeSize(2); // Stroke size in pixels
$box->draw("CHINESE FDI IN INDIA");

//$box = new Box($im);
//$box->setFontFace( "C:\Windows\Fonts\coolvetica condensed rg.ttf"); 
//$box->setFontSize(80);
//$box->setFontColor(new Color(255, 255, 255));
//$box->setTextShadow(new Color(0, 0, 0, 50), 0, -2);
//$box->setBox(20, 20, 460, 460);
//$box->setTextAlign('center', 'center');
//$box->draw("Pacifico");

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
$box->draw("●Recently, govt. made a rule that FDIs from neighbouring countries, especially China would be subject to GoI approval.

●This move came after China's central bank buys 1.01% stake in HDFC.

●Chinese investors have already taken major stake in 18 out of India's top 30 unicorns.

●Total Chinese FDI into India is at $6.2 billion with tech investment alone at $4 million.");



$box = new Box($im);
$box->setFontFace( __DIR__.'/BraderJohn.ttf'); 
$box->setFontSize(80);
$box->setFontColor(new Color(255, 255, 255));
$box->setTextShadow(new Color(0, 0, 0, 50), 0, -2);
$box->setBox(20, 20, $width-68, $height-21);
$box->setTextAlign('right', 'bottom');
$box->setStrokeColor(new Color(0, 0, 0)); // Set stroke color
$box->setStrokeSize(1.5);
$box->draw("5");

header("Content-type: image/png");
imagepng($im);
?>