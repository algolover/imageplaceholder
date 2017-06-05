<?php
//<!--session_start();-->
header('Content-type: image/jpeg');

if($_GET['Width']=='' || $_GET['Height']=="")
{

	header("Location:./index.php");

}

$image_width=$_GET['Width'];
$image_height=$_GET['Height'];
$image_font=$_GET['font'] .".ttf";
$image_font_rel="./".$image_font;
$image_imgcolor=$_GET['imgcolor'];
$image_textcolor=$_GET['textcolor'];


if ( !isset($_GET['Width']) || !isset($_GET['Height'])){
	$image_width=500;
	$image_height=500;

}

$text="$image_height"." X "."$image_width";
//$text=".";

if($_GET['textcolor']==''){
$hex2="#969696";
}
else{
	$hex2=$_GET['textcolor'];

}





$hex=$_GET['imgcolor'];



//converting color from hex to rgb

function hextorgb($hex) {
   $hex = str_replace('#', '', $hex);
   if ( strlen($hex) == 6 ) {
      $rgb['r'] = hexdec(substr($hex, 0, 2));
      $rgb['g'] = hexdec(substr($hex, 2, 2));
      $rgb['b'] = hexdec(substr($hex, 4, 2));
   }
   else if ( strlen($hex) == 3 ) {
      $rgb['r'] = hexdec(str_repeat(substr($hex, 0, 1), 2));
      $rgb['g'] = hexdec(str_repeat(substr($hex, 1, 1), 2));
      $rgb['b'] = hexdec(str_repeat(substr($hex, 2, 1), 2));
   }
   else {
      $rgb['r'] = '0';
      $rgb['g'] = '0';
      $rgb['b'] = '0';
   }
   $value1=$rgb['r'];
   $value2=$rgb['g'];
   $value3=$rgb['b'];
   $value=[$value1,$value2,$value3];
   return $value;
}

$img_bg_color=hextorgb($hex);
$img_txt_color=hextorgb($hex2);







if ($image_width<=$image_height){
	$fontsize=(0.05*$image_width);
}
else{
	$fontsize=(0.05*$image_height);

}

// $bbox takes input relative path
$image_font_url="./fonts/"."$image_font";

// bbox is the bound box which bounds the text and returns all corner of rectangle starting from lower left and
// moves counter clockwise.
$bbox =imageftbbox($fontsize, 0, $image_font_url, $text);

// to center the text horizontally
$dwidth=$bbox[2]-$bbox[0];
$pos=$image_width/2 - $dwidth/2;

$image=imagecreate($image_width, $image_height);
imagecolorallocate($image,$img_bg_color[0],$img_bg_color[1],$img_bg_color[2]);


imagettftext($image,$fontsize,0,$pos,$image_height/2, imagecolorallocate($image,$img_txt_color[0],$img_txt_color[1],$img_txt_color[2])
,"./fonts/"."$image_font_rel", $text);



imagejpeg($image);

?>
