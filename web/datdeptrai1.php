<?php

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();





// 1. Nhan du lieu request tu iNET gui qua
$code               = $_REQUEST['code'];            // Ma chinh
$subCode            = $_REQUEST['subCode'];         // Ma phu
$mobile             = $_REQUEST['mobile'];          // So dien thoai +84
$serviceNumber      = $_REQUEST['serviceNumber'];   // Dau so 8x85
$info               = $_REQUEST['info'];            // Noi dung tin nhan


// 2. Ghi log va kiem tra du lieu
// Tim file log.txt tai thu muc chua file php xu ly sms nay
// kiem tra de biet ban da nhan du thong tin ve tin nhan hay chua
$text = $code." - ".$subCode." - ".$mobile." - ".$serviceNumber." - ".$user_ip." - ".$info;
$fh = fopen('log.txt', "a+") or die("Could not open log.txt file.");
@fwrite($fh, date("d-m-Y, H:i")." - $text\n") or die("Could not write file!");
fclose($fh);


// 2. Kiem tra bao mat du lieu tu iNET gui qua
// Hien tai co 2 IP goi tu iNET sang
// 210.211.127.168
// 210.211.127.172
if($user_ip != '210.211.127.168' && $user_ip != '210.211.127.172') { 
    echo $user_ip;
    echo "Authen Error";
    exit;
}// ket noi csdl
include'js.php';

$matkhau = rand(5, 100000);
$dulieu = explode(' ', $info);
$iduser = $dulieu[2];
$sdt = mysql_fetch_array(mysql_query("SELECT `sdtkichhoat` FROM `user` WHERE `user`='".$iduser."'")); 
$sdtkh = $sdt['sdtkichhoat'];
  if($sdtkh ==$mobile ){
 mysql_query("UPDATE user SET `password` = '".$matkhau."' WHERE `user` = '".$iduser."'");
  
  $noidung = "Chuc mung ban da lay lai mat khau tai khoan cua ban, mat khau moi la ".$matkhau." \n Dat dep trai luon o ben ban ^^ ";    
echo "0|".$noidung; 
  }
 else {
	  $sai = "so dien thoai cua ban khong phai so dien thoai dang ky cua tai khoan nay!";  
	  echo "0|".$sai;
 

 }


//Đóng kết nối database dbarmy2


// 5. Tra ve tin nha gom kieu tin nhan (0) va noi dung tin nhan
// Xuong dong trong tin nhan su dung \n
   
?>
