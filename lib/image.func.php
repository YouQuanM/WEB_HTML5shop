<?php
require_once 'string.func.php';
//通过GD库来做验证码
function verifyImage(){
//创建画布
$width = 80;
    session_start();
    $height = 28;
    $image = imagecreatetruecolor($width, $height);
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    // 用矩形框填充画布
    imagefilledrectangle($image, 1, 1, $width - 2, $height - 2, $white);
    $type = 1;
    $lenght = 4;
    $chars = buildRandomchar($type, $lenght);
    $sess_name = "verify";
    $_SESSION[$sess_name] = $chars;
    $fontfiles = array(
        "HYC6GFM.TTF",
        "SIMSUN.TTC",
        "SIMYOU.TTF",
        "STHUPO.TTF",
        "STXINGKA.TTF"
    );
    for ($i = 0; $i < $lenght; $i ++) {
        $size = mt_rand(14, 18);
        $angle = mt_rand(- 15, 15);
        $x = 5 + $i * $size;
        $y = mt_rand(20, 25);
        $fontfile = "../fonts/" . $fontfiles[mt_rand(0, count($fontfiles) - 1)];
        $color = imagecolorallocate($image, mt_rand(0, 50), mt_rand(80, 160), mt_rand(180, 240));
        $text = substr($chars, $i, 1);
        imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
    }
   

    header("content-type:image/gif");
    imagegif($image);
    imagedestroy($image);
}