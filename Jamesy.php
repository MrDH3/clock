<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');

$MadelineProto->start();

$time=date("H:i",strtotime("5 hour"));
$sana = date('d.m.Y',strtotime('2 hour'));
$timer=date("H:i",strtotime("2 hour"));
$sardor=date("H:i",strtotime("-7 hour"));

$input = ["❓Hayot nima?
- Ulkan bir bozor... 
Unda jamdir dilkash, dilozor... ", "❓Odamlarchi?
- Zoʻr savdogarlar... 
Mehr sotar, yoki sitamlar... ", "❓ Umr nima?
- Yil fasllari... 
Bahorda ochilib...., Kuz-xazonlari.... ", "❓ Unda vaqtchi?
- Shamolday uchqur... 
Dami oʻtkir hanjar millari... ", "❓Sabr nima?
- Baland bir qoy.... 
Choʻqqisin zabt etmoq, mushkul bir o'y... 
", "❓Toqatningchi? - Bormi bahosi?
Unga tengdir Jannat sabosi.... 
", "❓Ota-ona qanday moʼjiza?
O'lguncha bepul kimgadir pul berish uchun ishlash, haqiqiy moʼjiza..! 
", "❓Doʻstu-yorga berasizmi taʼrif? 
❓- Qalb haqida mumkinmi tavsif?! 
", "❓Vo ajabkim, savollar bisyor... 
Sharxlamoqchi?
Senda ihtiyor...
"];

  $rand=array_rand($input);
  $text="$input[$rand]";
 $nik = ["Mr_D_H"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";
  
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt | $time",'about'=>"$text"]);

$MadelineProto->account->updateStatus(['offline' => FALSE ]);
$yil = date("Y", strtotime("2 hour"));

$sana = date("d/m/Y", strtotime("2 hour"));
header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm1.jpg');
imagejpeg($img,"goto1.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm2.jpg');
imagejpeg($img,"goto2.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm3.jpg');
imagejpeg($img,"goto3.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm4.jpg');
imagejpeg($img,"goto4.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm5.jpg');
imagejpeg($img,"goto5.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm6.jpg');
imagejpeg($img,"goto6.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm7.jpg');
imagejpeg($img,"goto7.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm8.jpg');
imagejpeg($img,"goto8.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm9.jpg');
imagejpeg($img,"goto9.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm10.jpg');
imagejpeg($img,"goto10.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm11.jpg');
imagejpeg($img,"goto11.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm1.jpg');
imagejpeg($img,"goto12.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm13.jpg');
imagejpeg($img,"goto13.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm14.jpg');
imagejpeg($img,"goto14.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm15.jpg');
imagejpeg($img,"goto15.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm16.jpg');
imagejpeg($img,"goto16.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm17.jpg');
imagejpeg($img,"goto17.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm18.jpg');
imagejpeg($img,"goto18.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm19.jpg');
imagejpeg($img,"goto19.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm20.jpg');
imagejpeg($img,"goto20.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm21.jpg');
imagejpeg($img,"goto21.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm22.jpg');
imagejpeg($img,"goto22.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm23.jpg');
imagejpeg($img,"goto23.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm24.jpg');
imagejpeg($img,"goto24.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm25.jpg');
imagejpeg($img,"goto25.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm26.jpg');
imagejpeg($img,"goto26.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm27.jpg');
imagejpeg($img,"goto27.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm28.jpg');
imagejpeg($img,"goto28.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm29.jpg');
imagejpeg($img,"goto29.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm30.jpg');
imagejpeg($img,"goto30.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm31.jpg');
imagejpeg($img,"goto31.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm32.jpg');
imagejpeg($img,"goto32.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm33.jpg');
imagejpeg($img,"goto33.jpg");






$logo = ["goto1.jpg", "goto2.jpg", "goto3.jpg", "goto4.jpg","goto5.jpg", "goto6.jpg", "goto7.jpg","goto8.jpg","goto9.jpg","goto10.jpg","goto11.jpg","goto12.jpg","goto13.jpg","goto14.jpg","goto15.jpg","goto16.jpg","goto17.jpg","goto18.jpg","goto19.jpg","goto20.jpg","goto21.jpg","goto22.jpg","goto23.jpg","goto24.jpg","goto25.jpg","goto26.jpg","goto27.jpg","goto28.jpg","goto29.jpg","goto30.jpg","goto31.jpg","goto32.jpg","goto33.jpg",];
$logorand=array_rand($logo);
  $logopic="$logo[$logorand]";

if($yil == "2023"){
  header('Content-type: image/jpg');
  file_get_contents($logopic);
  $info = $MadelineProto->get_full_info('me');
  $inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
  $deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
  }
  $MadelineProto->photos->updateProfilePhoto(['file' => "$logopic" ]);
    
    

?>