<!-- ****************************
     ****************************
     ***    Tác giả: Đạt Văn  ***   
     ***    fb.com/nhockm4v   ***
     ***    01286546653       ***
     ****************************  
     ****************************  -->
	 <?php ob_start();?><?php
session_start();
include('js/js.php');
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Donate</title>
        <link rel="stylesheet" href="/army/css/a.css" type="text/css" />		
        <link rel="shortcut icon" href='http://dd.mobiarmy3.com/app/view/images/favicon.png' type="image/x-icon" />
    </head> 
    
    <body>
        <div class="body_body">
            <div class="body-content"></br>
                <div class="a" align="center"><a href="/"><img src="/army/images/logo.png" /></a></div>
                <div id="top">
                    <div class="link-more">	
                        <div class="h" align="center">
                            <!--<div style="color: #032E58;margin-top:-8px;margin-bottom:4px;">
							<center> <b>Mạng xã hội cho điện thoại di động</b></center> 
							</div>-->
							<div class="bg_tree"></div>
							<div class="bg_noel"></div>
                             <?php
							require('header.php');
							
							?>
                         <div class="bg-content" "><?php
							require('header1.php');
						
							?> <script type="text/javascript">
    function isNumbericString(n) {
          return !isNaN(parseFloat(n)) && isFinite(n);
    }

      function recharge(){
        if(inetForm.pin.value == ''){
              alert('Vui lòng nhập mã thẻ cào');
              inetForm.pin.focus();
              return false;
          }
/*          if(!isNumbericString(inetForm.pin.value)){
              alert('Mã của thẻ cào là một chuỗi số');
              inetForm.pin.focus();
              return false;
          }*/
          if(inetForm.pin.value.length < 10 || inetForm.pin.value.length > 18){
              alert('Mã của thẻ cào là một chuỗi số có độ dài 10-15 ký tự');
              inetForm.pin.focus();
              return false;
          }
          if(inetForm.serial.value == ''){
              alert('Vui lòng nhập serial của thẻ cào');
              inetForm.serial.focus();
              return false;
          }
          if(inetForm.serial.value.length < 9 || inetForm.serial.value.length > 18){
              alert('Serial của thẻ cào có độ dài 9-15 ký tự');
              inetForm.serial.focus();
              return false;
          }
          inetForm.submit();
      }
</script>
<div class="title"><h4><font  color="#FF7700" ><b>ỦNG HỘ ADMIN ĐẸP TRAI</b></font></h4></div>

<form method="post" name="inetForm">
    <div style="display: block; padding: 20px; box-shadow: 0px 1px 3px #ccc; font-family: Arial, Helvetica, sans-serif">
        
        <div style="padding-bottom: 15px;">
            <label>
                <h5 style="color: red;"></h5>
            </label>
            <label
                style="display: block; padding-bottom: 5px; font: 'Arial', Helvetica, sans-serif">
                <strong>Mã thẻ:</strong>
            </label>
            <input id="pin" name="pin"
                style="margin: 0px; border: 1px solid #ccc; width: 250px; border-radius: 5px; height: 25px; line-height: 25px; padding: 0px 10px; font-size: 14px; -webkit-box-shadow: 0 0 0 #000, inset 0px 3px 3px #eee; box-shadow: 0 0 0 #000, inset 0px 3px 3px #eee;"
                type="text" size="45" value="<?=$_POST['pin']?>" maxlength="15"><br />
                <small>Phải cào lớp bạc phủ để thấy mã</small>
        </div>
        
        <div style="padding-bottom: 15px;">
            <label for="txt_sthe"
                style="display: block; padding-bottom: 5px; font: 'Arial', Helvetica, sans-serif">
                <strong>Serial thẻ:</strong>
            </label>
            <input id="serial" name="serial"
                style="margin: 0px; border: 1px solid #ccc; width: 250px; border-radius: 5px; height: 25px; line-height: 25px; padding: 0px 10px; font-size: 14px; -webkit-box-shadow: 0 0 0 #000, inset 0px 3px 3px #eee; box-shadow: 0 0 0 #000, inset 0px 3px 3px #eee;"
                type="text" size="45" value="<?=$_POST['serial']?>" maxlength="15"><br />
                <small>Mã dãy số nằm ngay trên thẻ</small>
        </div>
        <div style="padding-bottom: 15px;">
            <label
                style="display: block; padding-bottom: 5px; font: 'Arial', Helvetica, sans-serif">
                <strong>Loại thẻ:</strong>
            </label>
            <select id="type" name="type"
                style="padding: 5px; border: 1px solid #ccc; width: 150px; border-radius: 5px; margin: 0px; -webkit-box-shadow: 0 0 0 #000, inset 0px 3px 3px #eee; box-shadow: 0 0 0 #000, inset 0px 3px 3px #eee;">

                
                <option value="VTT" <? if($_POST['type'] == 'VTT') echo 'selected="selected"'; ?>
                    Viettel
                </option>
                
                <option value="VNP" <? if($_POST['type'] == 'VNP') echo 'selected="selected"'; ?>
                    Vinaphone
                </option>
                
                <option value="VMS" <? if($_POST['type'] == 'VMS') echo 'selected="selected"'; ?>
                    Mobifone
                </option>
                
            </select>
        </div>
        <div style="padding-bottom: 15px;">
            
        </div>
        <div>
            <input type="button" onclick="recharge();" value="Ủng hộ Admin"
								                       style="background-color: #00467A; border: 1px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF; display: block; font-size: 16px; font-weight: bold; padding: 6px 14px; width: 200px; text-align: center; text-shadow: 0 1px #20942B; cursor: pointer; -webkit-box-shadow: 0 0 0 #000, inset 0px 2px 2px #39B54A; box-shadow: 0 0 0 #000, inset 0px 2px 2px #009DE0;">
    </div>
</form>
</body>
</html>
</html>
                                                              </div>
                        </div>
                    
                    </div>

                </div>

          <div class="left_b_bottom"><div class="right_b_bottom"><div class="footer"><div class="left_bottom"></div><div class="right_bottom"></div></div></div></div>
 <div class="copyright"><h2>Mobi Army Lậu</h2>
Bản Quyền thuộc về @TeaMobi - 2014</div>
</div>
        </div>
    </div>
</body>

</html>
<?php
if(strlen($_POST['pin']) >= 10) {    
    $ch = curl_init();

    $type       = addslashes($_POST['type']);   // Loai the cao
    $pin        = addslashes(clearpin($_POST['pin']));    // Ma nap tien
    $seri       = addslashes(clearpin($_POST['serial'])); // Seri the cao
    
    // tham so bao mat lay tu dia chi http://sms.vn/card-charging => chon sua
    $accesskey  = '49d34f49d0392a6ec95657bc11d7c1db';
    $secretkey  = '0b6d2371a6f00220ced95c4a677f9c00';

    $data       = "accesskey=".$accesskey."&type=".$type."&pin=".$pin."&serial=".$seri;
    
    $signature  = "accesskey=".$accesskey."&serial=".$seri."&pin=".$pin."&type=".$type."&privatekey=".$secretkey;

    $param = $data."&signature=".md5($signature);
    
    curl_setopt($ch, CURLOPT_URL,"http://sms.vn/card-charging-api");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);
    curl_close ($ch);
    
    $infolog = "The cao ".$type." - Ma Nap Tien: ".$pin." - Seri: ".$seri." - Thoi gian: ".date("H:i d/m/Y");

    // xu ly ket qua nap the cao
    // 1. Nap the thanh cong
    if($server_output >= 10000) {
          $infologfull = "THANH CONG: Menh gia: ".number_format($server_output)." - ".$infolog;  
          $filename = "carddung.txt";
          $fh = fopen($filename, "a+") or die("Could not open carddung log file.");
          fwrite($fh, $infologfull."\n\n") or die("Could not write file!");
          fclose($fh);
          
          // xu ly du lieu cua ban tai day
          // Vi du cong tuong ung so tien vao tai khoan thanh vien...
          // dbconnect();
          // SQL Query();
          
          echo "<script>alert('".$infologfull."');</script>";        
    }
    // 2. Nap the that bai
    else {
          $infologfull = "THAT BAI(Ma loi ".$server_output."): ".$infolog;  
          $filename = "cardsai.txt";
          $fh = fopen($filename, "a+") or die("Could not open carddung log file.");
          fwrite($fh, $infologfull."\n\n") or die("Could not write file!");
          fclose($fh);
          
          echo "<script>alert('".$infologfull."');</script>";         
    }
}
elseif(!empty($_POST) && strlen($_POST['txt_sthe']) < 10) {
    echo "<script>alert('Vui lòng kiểm tra lại các tham số đã nhập vào!');</script>";
}

// Xu ly truong hop khach hang nhap ca dau , - space
function clearpin($input) {
    $output = str_replace(" ", "", $input);
    $output = str_replace("-", "", $output);
    $output = str_replace("+", "", $output);
    $output = str_replace("'", "", $output);
    $output = str_replace('"', "", $output);
    
    return $output;
}
?>
     