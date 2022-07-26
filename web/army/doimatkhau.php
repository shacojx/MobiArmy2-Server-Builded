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
        <title>Đổi mật khẩu</title>
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
						
							?> 
							<div class="title"><h4><font  color="#FF7700" ><b>ĐỔI MẬT KHẨU</b></font></h4></div></br>
							<form action="quatrinhdoimk.php" method="post" align="left" style="display: block;  border-radius: 5px; padding: 20px; box-shadow: 0px 1px 3px #ccc; font-family: Arial, Helvetica, sans-serif">	
                                                                                                              
                              <table>
                                              
										
								
                                            <td><label for="user">Mật khẩu mới:</br></label></td>
                                            <td><input name="passnew" type="password" value="" /></td>
                                        </tr>
                                        <tr>
                                            <td><label for="pass">Nhập lại mk mới:</label></td>
                                            <td><input name="repass" type="password" value="" />
                                        </tr>
										
                                    </table></br>
                               						                                 								<button type="submit" value="Nhận 10 triệu xu" name="submit"                           style="background-color: #00467A; border: 1px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF; display: block; font-size: 16px; font-weight: bold; padding: 6px 14px; width: 200px; text-align: center; text-shadow: 0 1px #20942B; cursor: pointer; -webkit-box-shadow: 0 0 0 #000, inset 0px 2px 2px #39B54A; box-shadow: 0 0 0 #000, inset 0px 2px 2px #009DE0;">Đổi mật khẩu</button><br />

							
								</form>
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
