<?php
$xcoord1=$_POST["xcoordinate"];
$ycoord1=$_POST["ycoordinate"];
$img=$_POST["imgpath"];
$text=$_POST["text"];
$image = imagecreatefromjpeg($img);
 $output = "textimage1.jpg";
   
$white = imagecolorallocate($image,255,255,255);
  
$black = imagecolorallocate($image,0,0,0);
  $font_size = 40;
  $rotation=1;
  $font = "OpenSans-Bold.ttf";
  $text1 = imagettftext($image,$font_size,$rotation,$xcoord1,$ycoord1,$white,$font,$text);
 
 imagejpeg($image,$output);


?>
<img src = "<?php echo $output?>">