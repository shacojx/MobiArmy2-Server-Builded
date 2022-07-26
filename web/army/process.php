<!-- ****************************
     ****************************
     ***    Tác giả: Đạt Văn  ***   
     ***    fb.com/nhockm4v   ***
     ***    01286546653       ***
     ****************************  
     ****************************  -->
	 <!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"><html>
    <?php
session_start();

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Chào mừng bạn đến với Mobi Army Lậu - Đăng nhập, Đăng ký</title>
        <link rel="stylesheet" href="/army/css/a.css" type="text/css" />		
        <link rel="shortcut icon" href='http://dd.mobiarmy3.com/app/view/images/favicon.png' type="image/x-icon" />
    </head> 
    
    <body>
        <div class="body_body">
            <div class="body-content"><br />
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

<?php
include('js/js.php');


$clan       = addslashes($_POST['clan']);
$id 	=  $_SESSION['id'];


//Code xử lý, uplock dữ liệu vào table dựa theo điều kiện WHERE tại user_id = 1
$sql = "UPDATE armymem SET clan=$clan WHERE id=$id";
if (!$clan) {
       header('Location: login.php');
        exit;
    }

if ($connect->query($sql) === TRUE) {
    //Nếu kết quả kết nối thành công, trở về trang view.
    echo('Đã thêm thành công rồi nha cu 	</br><a href="javascript: history.go(-1)"><u>Trở lại</u></a>'); 
} else { 
    //Nếu kết quả kết nối không được thì trở về uplock.php đồng thời gán giá trị error=1, dựa theo giá trị này trang uplock.php có thể thông báo lỗi cần thiết.
    echo('Thất bại </br><a href="javascript: history.go(-1)"><u>Trở lại</u></a>');
}


?>
 </div>
                        </div>
                      

                </div>
				

          <div class="left_b_bottom"><div class="right_b_bottom"><div class="footer"><div class="left_bottom"></div><div class="right_bottom"></div></div></div></div>
 <div class="copyright"><h2>Mobi Army Lậu</h2>
Bản Quyền thuộc về @TeaMobi - 2014</div>

        


</html>
