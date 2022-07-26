<!-- ****************************
     ****************************
     ***    Tác giả: Đạt Văn  ***   
     ***    fb.com/nhockm4v   ***
     ***    01286546653       ***
     ****************************  
     ****************************  -->
	 
<div style="font-size:12px;" align="right">	





<?php
    $user_id = intval($_SESSION['id']);
    $sql_query = @mysql_query("SELECT * FROM user WHERE user_id='{$user_id}'");
    $member = @mysql_fetch_array( $sql_query ); 
   
   if ($member['user']=="admin")  {
   
	
  

 ?><button onclick="window.location.href='../army/admincp.php'" style="background-color: #00467A; border: 0px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF;  font-size: 11px; font-weight: bold; padding: 6px 1px; width: 100px; text-align: center;">Quản lý member</button>
								
								
								
								<?php
	}
								
								?>










									
<button onclick="window.location.href='../army/clan.php'" style="background-color: #00467A; border: 0px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF;  font-size: 11px; font-weight: bold; padding: 6px 1px; width: 35px; text-align: center;">Clan</button>
<button onclick="window.location.href='../army/donate.php'" style="background-color: #00467A; border: 0px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF;  font-size: 11px; font-weight: bold; padding: 6px 1px; width: 45px; text-align: center;">Donate</button>
<button onclick="window.location.href='../army/doimatkhau.php'" style="background-color: #00467A; border: 0px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF;  font-size: 11px; font-weight: bold; padding: 6px 1px; width: 85px; text-align: center;">Đổi mật khẩu</button>

<button onclick="window.location.href='../army/logout.php'" style="background-color: #00467A; border: 0px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF;  font-size: 11px; font-weight: bold; padding: 6px 1px; width: 65px; text-align: center;">Đăng xuất</button>
									</div>
								</br>
					
	<center>

<?php $locklol = mysql_fetch_array(mysql_query("SELECT * FROM `user` WHERE `user_id`='" . trim(mb_strtolower($user_id)) . "' LIMIT 1"));?>
								   <?php if($locklol['lock'] == 1) 
                                 {
                                    ?>
								 <br />

                                 <div style="font-size:12px;">Tài khoản của bạn chưa được kích hoạt</br> VUI LÒNG SOẠN TIN NHẮN THEO CÚ PHÁP:</br><b><a color="red">ON ARMYLAU <?php echo $user_id; ?> gửi 8585 (5000đ/tin nhắn)</a></b></br> Để kích hoạt tài khoản của bạn</br>Tài khoản chưa kích hoạt sẽ không vào được game</div><br />
								  <hr  width="100%" size="4px" align="center" color="#004679" /> 
								 
								  <?php } ?></center>