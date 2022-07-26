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
        <title>Admin cp</title>
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
							
							
							
							<?php
    $user_id = intval($_SESSION['id']);
    $sql_query = @mysql_query("SELECT * FROM user,armymem WHERE user_id='{$user_id}'");
    $member = @mysql_fetch_array( $sql_query ); 
   // nếu là admin
   if ($member['user']=="admin")  {
   

	
 
				?>
				<div class="title"><h4><font  color="#FF7700" ><b>XÓA TÀI KHOẢN CHƯA KÍCH HOẠT</b></font></h4></div></br>
							<button onclick="window.location.href='../army/xoakhongkichhoataa.php'" style="background-color: #00467A; border: 0px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF;  font-size: 15px; font-weight: bold; padding: 6px 1px; width: 200px; text-align: center;">XÓA CHƯA KÍCH HOẠT</button></br></br>
<div class="title"><h4><font  color="#FF7700" ><b>QUẢN LÝ MEMBER</b></font></h4></div></br>
			<form action="" method="GET">
			Tên tài khoản: 
			<input type="text" name="timtaikhoan" value="" />
       <input type="submit" value="Tìm tài khoản" name="submit" style="background-color: #00467A; border: 0px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF;  font-size: 10	px; font-weight: bold; padding: 3px 5px; width: 100px; text-align: center;;">

			</br></br>
			</form>
			
		<?php
		
		
		if (isset($_REQUEST['submit'])) {
    $search = addslashes($_GET['timtaikhoan']);
    if (empty($search)) {
        echo "</br><center>Nhập tên vào</center></br>";
    } else {
        // Phan dung vong lap while show du lieu
		 $query = "select * FROM user INNER JOIN armymem ON user.user_id = armymem.id where user like '%$search%'";
		  $sql = mysql_query($query);
 
                // Đếm số đong trả về trong sql.
                $num = mysql_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
				echo "</br>$num tên tài khoản trả về với từ khóa <font color='red'><b>$search</b></font>";
				// Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
				echo '<table  border="1px" cellspacing="0" cellpadding="5" style="background-color: #00467A; border: 1px outset #FFFFFF; color: #FFFFFF;  font-size: 13px; font-weight: bold; padding: 1px 1px; width: 100%; text-align: center;">
                    <tr>
							<td><font style="color:#FF7700" SIZE="3PX">KÍCH HOẠT</td>
                        <td><font style="color:#FF7700"SIZE="3PX">TÊN NICK</td>
                            <td><font style="color:#FF7700"SIZE="3PX">PASS</td>
                            <td><font style="color:#FF7700"SIZE="3PX">XU</td>
                           <td><font style="color:#FF7700"SIZE="3PX">LƯỢNG</td>
							<td><font style="color:#FF7700"SIZE="3PX">POINT</td>
							<td><font style="color:#FF7700"SIZE="3PX">SỬA</td>
							<td><font style="color:#FF7700"SIZE="3PX">XÓA</td>
						</tr>
						  ';
                    

				   while ($row = mysql_fetch_assoc($sql)) {
                       // chọn và decode
					   $aidrow = $row['user_id'];
						$auser = $row['user'];
						$apass = $row['password'];
						$axu = $row['xu'];
						$aluong = $row['luong'];
						if($row['lock']<1) {
                            $alock = "<option name='roi' value='roi'>Rồi</option><option name='chua' value='chua'>Chưa</option>";
                        }else {
                            $alock = "<option name='chua' value='chua'>Chưa</option><option name='roi' value='roi'>Rồi</option>";
                        }
$user = mysql_fetch_array(mysql_query("SELECT * FROM `user` WHERE `user_id`='" . $aidrow . "' LIMIT 1")); 
$armymem = mysql_fetch_array(mysql_query("SELECT * FROM `armymem` WHERE `id`='" . $aidrow . "' LIMIT 1")); 
$nhanvat = mysql_fetch_array(mysql_query("SELECT * FROM `nhanvat` WHERE `nhanvat_id`='" . $armymem['NVused'] . "' LIMIT 1")); 
$tnv = $nhanvat['name'];
$nv = json_decode($armymem['NV'.$armymem['NVused']],true);
$nhancmnvat = 'NV'.$armymem['NVused'];
$point = $nv['point'];

//post

// encode tại đây ( point +100)

						 
						  echo '<tr><form action="" method="POST" name="napxu">';
                            echo '<td><select name="lock">';
							 echo	  "'$alock'";
							 echo "</td></select>";
							
							echo "<input type='hidden' name='id' value='$aidrow'>";
                            echo "<td><input size='4' name='user' value='$auser'></td>";
                            echo "<td><input size='4' name='pass' value='$apass'></td>";
                            echo "<td><input size='4' name='xu' value='$axu'></td>";
                            echo "<td><input size='4' name='luong' value='$aluong'></td>";
							echo "<td><input size='4' name='point' value='$point'></td>";
							echo "<td> <button type='submit' value='Nhận 10 triệu xu' name='sua' style='background-color: #00467A; border: 1px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF; display: block; font-size: 16px; font-weight: bold; padding: 5px 5px; width: 20; text-align: center;  cursor: pointer; -webkit-box-shadow: 0 0 0 #000, inset 0px 2px 2px #39B54A; box-shadow: 0 0 0 #000, inset 0px 2px 2px #009DE0;'>sửa</button>
</td>";

							echo "<td> <button type='submit' value='Nhận 10 triệu xu' name='xoa' style='background-color: #00467A; border: 1px solid #009DE0; border-radius: 5px 5px 5px 5px; color: #FFFFFF; display: block; font-size: 16px; font-weight: bold; padding: 5px 5px; width: 20; text-align: center;  cursor: pointer; -webkit-box-shadow: 0 0 0 #000, inset 0px 2px 2px #39B54A; box-shadow: 0 0 0 #000, inset 0px 2px 2px #009DE0;'>Xóa</button>
</td>";
                        echo '</tr></form>';
					
                    }
                    echo '</table>';
                } 
                else {
                    echo "</br><center>Không tìm thấy</center></br>";
                   



		}	}}}	
$postid			 = $_POST['id'];

if($_POST['lock']=='roi') {
                            $postlock = "0";
                        }else {
                            $postlock = "1";
                        }
                    

$postuser 	 	 = $_POST['user'];
$postpass		  = $_POST['pass'];
$postxu 	 	 = $_POST['xu'];
$postluong	 = $_POST['luong'];
$postpoint 		 = $_POST['point'];
$vanquocdat = array(
    "lever" => $lever,
    "xp" => $xp,
    "point" => $postpoint,
    "pointAdd" => $pointadd,
    "data" => $data
);
 
$ok = json_encode($vanquocdat);
		?>
		 <?php  
		 //Nếu éo phải admin :) 
		 
		
		 if ($member['user']!="admin")  {
   
	
  

 ?>Mày éo phải admin nha cu!! </br>			</br>	
								
								<?php
								
						
		}		
		?>
		<?php
		
		//<<<<<<<<<<<<<<<<<<<<<<<-----             xóa              ---->>>>>>>>>>>>>>>>>>>>>>
	 if ($_POST['xoa'])
	 {
		  $baba = "DELETE FROM user WHERE user_id=$postid";
 
     mysql_query($baba);
	 die('<script>alert("Xóa thành công!");

  
 window.location = window.location
  </script>'); 
		 
		 
	 }

//<<<<<<<<<<<<<<<<<<<<<<<-----             sửa              ---->>>>>>>>>>>>>>>>>>>>>>

if ($_POST['sua'])
	 {
		
		$aa="UPDATE  `armymem`
		SET `xu` = '$postxu',
		`luong` = '$postluong'
		
		  
		
      WHERE id=$postid";
  
	   mysql_query($aa);
$ab="UPDATE  `user`
		SET `password` = '$postpass',
		`lock` = '$postlock',
		`user` = '$postuser'
      WHERE user_id=$postid";
  
	   mysql_query($ab) ;die('<script>alert("Sửa thành công!");

  
 window.location = window.location
  </script>'); 
		 
		 
	 
		 
	 }

		?>
								
								
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

