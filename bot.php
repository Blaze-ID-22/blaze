<?php
system("clear");

date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */


sleep(2);
echo $baner= $green.'                    ||  mmmmm   mmmm mmmmmmm ||
                    ||  #    # m"  `m   #    ||
                    ||  #mmmm* #    #   #    ||
                    ||  #    # #    #   #    ||
                    ||  #mmmm*  #mm#    #    ||';
echo "\n";


echo   "           <~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>";
echo $baner = "
               $putih2 ∆CREATOR             =$putih2 RAMADHAN
               $putih2 ∆INSTAGRAM           =$putih2 _dani.163
               $putih2 ∆WHATSAPP            =$putih2 0831-2343-8688\n";
echo "           <~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>";

echo "\n\n";
sleep(3);

echo $putih2."                         [ BOT LUCKYCASH ]       ";
echo "\n\n";

sleep(2);
include "cfg.php";

$header = array(
"User-Agent: ".$useragen,
"x-access-token: ".$accesstoken,
"Content-type: application/json",
"Connection: Keep-Alive",
"Accept: application/json",
);

function http_post($link,$data){
global $header;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $link);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  return curl_exec($ch);
}

$data = $devic;
$link = "https://appli.picturehit.cool/money/money_auth/getUser/";
$bom = json_decode(http_post($link, $data));

$email = $bom->user->email;
$credit =$bom->user->credits;
$kode = $bom->user->code_invite;
$ptoken = $bom->user->push_token;

$green2.system("toilet --width 70 -f pagga -F border  '      LUCKYCASH      '");

sleep(1);
echo $purple2."<••••••••••••••••••••••••••••••••••••••••••••••••>\n";

echo $putih2."Email  : ".$green2.$email;
echo "\n";
echo $putih2."Credit : ".$green2.$credit;
echo "\n";
echo $putih2."Invit  : ".$green2.$kode;
echo "\n";

echo $purple2."<••••••••••••••••••••••••••••••••••••••••••••••••>\n";
echo "\n";



$pos = '{"push_token":'.$ptoken.',"userId":'.$userid.'}';
$l = "https://appli.picturehit.cool/money/money_users/updatePushToken/";
$lol = json_decode(http_post($l, $pos));



sleep(2);

$aji = $check."\n\n";
$pon  = "https://appli.picturehit.cool/money/money_users/dailyRewards/";
$pok = http_post($pon,$aji);
$pok = json_decode($pok);

$tam = $pok->result;

if($tam == "ok"){
echo $putih2."Check-in => ".$green2.$tam."\n";
}else{
echo $putih2."Check-in => ".$red2."limit\n\n";
}
sleep(2);

while(true){
$p = $clim."\n\n";
$h = "https://appli.picturehit.cool/money/money_users/receiveDeltaCredits/";
$go = http_post($h,$p);
$go = json_decode($go);

$s = $go->result;


if ($s == "ok"){
echo $putih2."Status claim => ".$green2.$s."\n\n";
}else{
echo $red2."MISI HARI INI SUDAH HABIS.....COBA BESOK LAGI\n\n".$putih2;
exit;
}


//nunggu

for ($i=30; $i>=0; $i--){
 echo "\r                     \r";
 echo $putih2."Menunggu : ".$yellow2.$i.$putih2." sec  ";
 sleep(1);
}
 echo "\r                                     \r";
}
