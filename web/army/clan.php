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
										
                                    </table>
                                    <button type="submit" value="Đăng nhập" name="submit">Đăng nhập</button><br />
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
                                
                                 <button type="submit" value="Đăng Xuất" name="logout">Đăng Xuất</button><br />
								 <br />
                                 </form>
								  <?php } ?>
								 
                                 <?php if($req[online] == 0) 
                                 {
                                    ?>
									<?php
							require('header1.php');
							
							?>
									<?php
									require('army.php');
							
									?>
									
                               
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
        die('<script>alert("Phải ít hơn 1.000.000 Xu mới được nạp thêm!");

  
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
        die('<script>alert("Phải ít hơn 100 lượng mới được nạp thêm!");

  
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