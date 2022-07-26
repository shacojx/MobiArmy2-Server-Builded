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

// chọn và decode
$user = mysql_fetch_array(mysql_query("SELECT * FROM `user` WHERE `user_id`='" . $_SESSION['id'] . "' LIMIT 1")); 
$armymem = mysql_fetch_array(mysql_query("SELECT * FROM `armymem` WHERE `id`='" . $_SESSION['id']	 . "' LIMIT 1")); 
$nhanvat = mysql_fetch_array(mysql_query("SELECT * FROM `nhanvat` WHERE `nhanvat_id`='" . $armymem['NVused'] . "' LIMIT 1")); 
$tnv = $nhanvat['name'];
$nv = json_decode($armymem['NV'.$armymem['NVused']],true);
$nhancmnvat = 'NV'.$armymem['NVused'];
// chuyển 
$id			 = $_SESSION['id'];
$lever 	 	 = $nv['lever'];
$xp 		 = $nv['xp'];
$point 	 	 = $nv['point'];
$pointadd	 = $nv['pointAdd'];
$data 		 = $nv['data'];

// encode tại đây ( point +100)
$vanquocdat = array(
    "lever" => $lever,
    "xp" => $xp,
    "point" => $point + 100,
    "pointAdd" => $pointadd,
    "data" => $data
);
$damenv = $nhanvat['sat_thuong'];
$ok = json_encode($vanquocdat);
$theluc = $nv['pointAdd'][0]*10 + 1000;
$dame = $nv['pointAdd'][1]*10 + $damenv ;
$phongthu = $nv['pointAdd'][2]*10 +1000;
$mayman = $nv['pointAdd'][3]*10 +1000;
$dongdoi = $nv['pointAdd'][4]*10 +1000;

?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Chào mừng bạn đến với Mobi Army Lậu - Đăng nhập, Đăng ký</title>
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
                                                                                    <div class="bg-content" style="text-align:center">
                                                                                    <?php if(!$_SESSION['id'])
                                                                                    {

                                                                                        ?>
                            <div style="font-size:10px;">Sử dụng tài khoản Mobi Army Lậu để đăng nhập.<br>
							(chú ý: không dùng chung tài khoản mobi army của TeaMobi)</div>
                                <center><form action="" method="POST" name="login">
                                    <input type="hidden" name="nav" value="" readonly="readonly" />
                                    <table>
                                        <tr>
                                            <td><label for="user">Tên tài khoản:</label></td>
                                            <td><input name="user" type="text" value="" /></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pass">Mật khẩu:</label></td>
                                            <td><input name="pass" type="password" value="" />
                                        </tr>
										
                                    </table></br>
                                   								<input type="submit" value="Đăng nhập" name="submit"                           style="background-color: #00467A; border: 1px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF; display: block; font-size: 16px; font-weight: bold; padding: 6px 14px; width: 140px; text-align: center; text-shadow: 0 1px #20942B; cursor: pointer; -webkit-box-shadow: 0 0 0 #000, inset 0px 2px 2px #39B54A; box-shadow: 0 0 0 #000, inset 0px 2px 2px #009DE0;">
<br />
                                    <div style="font-size:10px;">
								Nếu bạn chưa có tài khoản, vui lòng <a href="/index.php">đăng ký</a>
                                </form><br>
								</center>
								
                                  <?php } else {
                                 $req = mysql_fetch_array(mysql_query("SELECT * FROM `armymem` WHERE `id`='" . trim(mb_strtolower($_SESSION[id])) . "' LIMIT 1")); ?>
								
								 
								  <?php if($req[online] == 1) 
                                 {
                                    ?>
									
								 <br />

                                 <div style="font-size:10px;">VÔ LẠI GAME BẤM ĐĂNG XUẤT RỒI HÃY ĐĂNG NHẬP VÀO ĐÂY</div><br />
								 
								 
								 <form action="" method="POST" name="napxu">
                                
  <center> <button type="submit" value="Nhận 10 triệu xu" name="logout"                           style="background-color: #00467A; border: 1px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF; display: block; font-size: 16px; font-weight: bold; padding: 6px 14px; width: 200px; text-align: center; text-shadow: 0 1px #20942B; cursor: pointer; -webkit-box-shadow: 0 0 0 #000, inset 0px 2px 2px #39B54A; box-shadow: 0 0 0 #000, inset 0px 2px 2px #009DE0;">Đăng xuất</button><br /></center>
								 <br />
                                 </form>
								  <?php } ?>
								 
                                 <?php if($req[online] == 0) 
                                 {
                                    ?>
									
									<?php
									require('header1.php');
							
									?><div class="title" align="LEFT" >
							<h4><font  color="#FF7700"><b>XIN CHÀO TÀI KHOẢN <?php echo $user['user']; ?></b></font></h4></div><div  align="LEFT">
							 		                      </br>  <b>  Chỉ số hiện tại:</b> <div style="font-size:11px;">   	<p><?php echo '- HP: <font color="red"> '.$theluc.'</font></br> </br>  - Dame:  <font color="red">'.$dame.'</font></br>  </br> - Phòng thủ:  <font color="red">'.$phongthu.'</font> </br> </br> - May mắn:  <font color="red">'.$mayman.'</font></br>  </br> - Đồng Đội:  <font color="red">'.$dongdoi.'</font>' ?></p>
</div>							</div>
                                 <form action="" method="POST" name="napxu"><div class="title" align="LEFT" >
					
		                    
								 <h4><font  color="#FF7700"><b>NHẬN XU LƯỢNG FREE KHI HẾT</b></font></h4></div></br><div  align="LEFT">
                                 <input name="id_user" type="hidden" value="<?php echo $_SESSION[id]; ?>" />
                                 <div style="font-size:10px;">Tài Khoản Đang Có: <font color="red"><?php echo $req[xu];?></font> Xu </div><br />
								<button type="submit" value="Nhận 10 triệu xu" name="napxu"                           style="background-color: #00467A; border: 1px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF; display: block; font-size: 16px; font-weight: bold; padding: 6px 14px; width: 200px; text-align: center; text-shadow: 0 1px #20942B; cursor: pointer; -webkit-box-shadow: 0 0 0 #000, inset 0px 2px 2px #39B54A; box-shadow: 0 0 0 #000, inset 0px 2px 2px #009DE0;">Nhận 10 triệu xu</button></br>
                                 <div style="font-size:10px;">Tài Khoản Đang Có: <font color="red"><?php echo $req[luong];?></font> Lượng </div><br />
                                 								<button type="submit" value="Nhận 10 triệu xu" name="napluong"                           style="background-color: #00467A; border: 1px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF; display: block; font-size: 16px; font-weight: bold; padding: 6px 14px; width: 200px; text-align: center; text-shadow: 0 1px #20942B; cursor: pointer; -webkit-box-shadow: 0 0 0 #000, inset 0px 2px 2px #39B54A; box-shadow: 0 0 0 #000, inset 0px 2px 2px #009DE0;">Nhận 5000 lượng</button><br />
								
								</div>
                                  <form action="" method="POST" name="napxu"><div class="title" align="LEFT">
								 <h4><font  color="#FF7700" ><b>RESET ĐỒ TRONG RƯƠNG VÀ TRANG BỊ</b></font></h4></div></br><div  align="LEFT">
         
										<div style="font-size:10px;">Reset rương : đồ trong rương sẽ bị xóa hết!</div><br />
                                 								<button type="submit" value="Nhận 10 triệu xu" name="resetruong"                           style="background-color: #00467A; border: 1px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF; display: block; font-size: 16px; font-weight: bold; padding: 6px 14px; width: 200px; text-align: center; text-shadow: 0 1px #20942B; cursor: pointer; -webkit-box-shadow: 0 0 0 #000, inset 0px 2px 2px #39B54A; box-shadow: 0 0 0 #000, inset 0px 2px 2px #009DE0;">Reset rương</button></br> 
								 
								 <form action="" method="POST" name="napxu">
								 
										<div style="font-size:10px;">Reset rương : đồ đang trang bị sẽ bị xóa hết!</div><br />
                         <button type="submit" value="Nhận 10 triệu xu" name="resettb" style="background-color: #00467A; border: 1px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF; display: block; font-size: 16px; font-weight: bold; padding: 6px 14px; width: 200px; text-align: center; text-shadow: 0 1px #20942B; cursor: pointer; -webkit-box-shadow: 0 0 0 #000, inset 0px 2px 2px #39B54A; box-shadow: 0 0 0 #000, inset 0px 2px 2px #009DE0;">Reset trang bị</button><br />
							
								<div class="title" align="LEFT" >
					
		                    
								 <h4><font  color="#FF7700"><b>QUAY SỐ NHẬN ĐỒ MỖI NGÀY</b></font></h4></div></br>
			
								<button type="submit" value="Nhận 10 triệu xu" name="quayso"                           style="background-color: #00467A; border: 1px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF; display: block; font-size: 16px; font-weight: bold; padding: 6px 14px; width: 200px; text-align: center; text-shadow: 0 1px #20942B; cursor: pointer; -webkit-box-shadow: 0 0 0 #000, inset 0px 2px 2px #39B54A; box-shadow: 0 0 0 #000, inset 0px 2px 2px #009DE0;">Quay Số</button></br> 

                                 </form>
								
                                 <?php }} ?>
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
// QUAY SỐ NHẬN ĐỐ
if($_POST['quayso'] && $_SESSION['id'])
{
    if($_POST['id_user'] != $_SESSION[id])
    {
         die('<script>alert("Lỗi ID!");

  
 window.location = "/army/login.php"
  </script>');
     }
     $req = mysql_fetch_array(mysql_query("SELECT * FROM `armymem` WHERE `id`='" . trim(mb_strtolower($_SESSION[id])) . "' LIMIT 1"));
     if($req[xu] < 1000000000000)
     {
        die('<script>alert("Chức năng chưa ra mắt!");

  
 window.location = "/army/login.php"
  </script>');
     }
     else
     {
        mysql_query(
		
         "UPDATE 
            armymem
         SET          
             `".$nhancmnvat."` = '" . $ok . "',
		     xu = `xu` - '100000000'
			
			
      WHERE
            id = '" . $id . "'
      ");
        die('<script>alert("Đã đổi 100 triệu xu ra 100 point thành công !");

  
 window.location = "/army/login.php"
  </script>');
     }

}

// đổi lượng ra point

if($_POST['doiluong'] && $_SESSION['id'])
{
    if($_POST['id_user'] != $_SESSION[id])
    {
         die('<script>alert("Lỗi ID!");

  
 window.location = "/army/login.php"
  </script>');
     }
     $req = mysql_fetch_array(mysql_query("SELECT * FROM `armymem` WHERE `id`='" . trim(mb_strtolower($_SESSION[id])) . "' LIMIT 1"));
     if($req[luong] < 20000)
     {
        die('<script>alert("Lượng phải bằng hoặc nhiều hơn 20.000 lượng!");

  
 window.location = "/army/login.php"
  </script>');
     }
     else
     {
        mysql_query(
		
         "UPDATE 
            armymem
         SET          
            `".$nhancmnvat."` = '" . $ok . "',
		     luong = `luong` - '20000'
			
			
      WHERE
            id = '" . $id . "'
      ");
        die('<script>alert("Đã đổi 20.000 lượng ra 100 point thành công !");

  
 window.location = "/army/login.php"
  </script>');
     }

}

// đổi xu ra point
if($_POST['doixu'] && $_SESSION['id'])
{
    if($_POST['id_user'] != $_SESSION[id])
    {
         die('<script>alert("Lỗi ID!");

  
 window.location = "/army/login.php"
  </script>');
     }
     $req = mysql_fetch_array(mysql_query("SELECT * FROM `armymem` WHERE `id`='" . trim(mb_strtolower($_SESSION[id])) . "' LIMIT 1"));
     if($req[xu] < 100000000)
     {
        die('<script>alert("Xu phải bằng hoặc nhiều hơn 100 triệu xu!");

  
 window.location = "/army/login.php"
  </script>');
     }
     else
     {
        mysql_query(
		
         "UPDATE 
            armymem
         SET          
             `".$nhancmnvat."` = '" . $ok . "',
		     xu = `xu` - '100000000'
			
			
      WHERE
            id = '" . $id . "'
      ");
        die('<script>alert("Đã đổi 100 triệu xu ra 100 point thành công !");

  
 window.location = "/army/login.php"
  </script>');
     }

}



//reset trang bị
if($_POST['resettb'] && $_SESSION['id'])
{
    if($_POST['id_user'] != $_SESSION[id])
    {
         die('<script>alert("Lỗi ID!");

  
 window.location = "/army/login.php"
  </script>');
     }
    
    
        mysql_query(
         "UPDATE armymem SET `ruongtrangbi`='[]'
			
      WHERE
            `id` = '" . $_SESSION[id] . "'
      ");
        die('<script>alert("Đã reset trang bị đang mặc thành công!");

  
 window.location = "/army/login.php"
  </script>');
     }
// reset rương
if($_POST['resetruong'] && $_SESSION['id'])
{
    if($_POST['id_user'] != $_SESSION[id])
    {
         die('<script>alert("Lỗi ID!");

  
 window.location = "/army/login.php"
  </script>');
     }
    
    
        mysql_query(
         "UPDATE armymem SET `ruongitem`='[]'
			
      WHERE
            `id` = '" . $_SESSION[id] . "'
      ");
        die('<script>alert("Đã reset rương thành công!");

  
 window.location = "/army/login.php"
  </script>');
     }


//nạp xu
if($_POST['napxu'] && $_SESSION['id'])
{
    if($_POST['id_user'] != $_SESSION[id])
    {
         die('<script>alert("Lỗi ID!");

  
 window.location = "/army/login.php"
  </script>');
     }
     $req = mysql_fetch_array(mysql_query("SELECT * FROM `armymem` WHERE `id`='" . trim(mb_strtolower($_SESSION[id])) . "' LIMIT 1"));
     if($req[xu] > 1000000)
     {
        die('<script>alert("Phải ít hơn 1.000.000 Xu mới được nhận thêm!");

  
 window.location = "/army/login.php"
  </script>');
     }
     else
     {
        mysql_query(
         "UPDATE 
            armymem
         SET          
            `xu` = `xu` + '10000000'
      WHERE
            `id` = '" . $_SESSION[id] . "'
      ");
        die('<script>alert("Đã nạp vào tài khoản 10 triệu xu!");

  
 window.location = "/army/login.php"
  </script>');
     }

}
// nạp lượng
if($_POST['logout'] && $_SESSION['id'])
{
session_start();
session_destroy();
header('location: login.php');
exit;
}
if($_POST['napluong'] && $_SESSION['id'])
{
    if($_POST['id_user'] != $_SESSION[id])
    {
         die('<script>alert("Lỗi ID!");

  
 window.location = "/army/login.php"
  </script>');
     }
     $req = mysql_fetch_array(mysql_query("SELECT * FROM `armymem` WHERE `id`='" . trim(mb_strtolower($_SESSION[id])) . "' LIMIT 1"));
     if($req[luong] > 100)
     {
        die('<script>alert("Phải ít hơn 100 lượng mới được nhận thêm!");

  
 window.location = "/army/login.php"
  </script>');
     }
     else
     {
        mysql_query(
         "UPDATE 
            armymem
         SET          
            `luong` = `luong` + '5000'
      WHERE
            `id` = '" . $_SESSION[id] . "'
      ");
        die('<script>alert("Đã nạp vào tài khoản 5000 lượng");

  
 window.location = "/army/login.php"
  </script>');
     }

}

if($_POST['user'] && $_POST['pass'])
{
$username = mysql_real_escape_string($_POST['user']);
$password = $_POST['pass'];
$req = mysql_query("SELECT * FROM `user` WHERE `user`='" . trim(mb_strtolower($username)) . "' LIMIT 1");
        if (mysql_num_rows($req)) {
            $user = mysql_fetch_assoc($req);
if ($password == $user['password']) {

$_SESSION['id'] = $user['user_id'];

?>
<meta http-equiv=refresh content="0; URL=login.php">
<?php
}}
else
{
  die('<script>alert("Tài Khoản Hoặc Mật Khẩu Không Đúng, Vui Lòng Nhập Lại!"); </script>');
}
}
?>
     <?php ob_end_flush();?>