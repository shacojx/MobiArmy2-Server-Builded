<!-- ****************************
     ****************************
     ***    Tác giả: Đạt Văn  ***   
     ***    fb.com/nhockm4v   ***
     ***    01286546653       ***
     ****************************  
     ****************************  -->
	 <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width,maximum-scale=1,user-scalable=no"/>
        <meta http-equiv="content-language" content="vi" />
        <title></title>
        <meta name="keywords" content=", Mobi army, mobi army 2, mobi army 3" />
        <meta name="description" content="Diễn đàn chính thức của Mobi Army 3 Game bắn súng theo lượt Việt Nam được yêu thích nhất trên Mobile!" />
        <meta name="robots" content="INDEX,FOLLOW" />
        <link rel="icon" href='http://dd.mobiarmy3.com/app/view/images/favicon.png' type="image/x-icon" />
        <link rel="apple-touch-icon" href="../logo256.png" />
        <link rel="shortcut icon" href='http://dd.mobiarmy3.com/app/view/images/favicon.png' type="image/x-icon" />
        <link rel="icon" type="image/png" href="http://dd.mobiarmy3.com/app/view/images/favicon.png">
        <link rel="stylesheet" type="text/css" href="http://dd.mobiarmy3.com/app/view/css/StyleSheet.css" />
        <link rel="stylesheet" type="text/css" href="/army/css/a.css" />
        
    </head>
    <body>       <div class="body_body">
       <div style="line-height: 10px;
                font-size: 10px;
                padding-right: 5px;
                    margin-bottom: 25px;
    margin-top: -12px;">
            <img height=12 src="http://mobiarmy3.com/12.png" style="vertical-align: middle;"/>
            <span style="vertical-align: middle;">Dành cho người chơi trên 12 tuổi. Chơi quá 180 phút mỗi ngày sẽ hại sức khỏe.
            </span>
            </div>
<div class="body-content">
 <div class="a" align="center"><a href="/"><img src="/army/images/logo.png" /></a></div>
<div id="top">
        <div class="link-more">
        <div class="h">
        <div class="bg_tree"></div>
        <div class="bg_noel"></div>
        </div>
    <?php
							require('header.php');
							?>
        <div class="bg-content">Quá trình đăng ký tài khoản!<br />
<ul>
        <li>
<?php
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if(!isset($_POST['txtUsername']))
        die('');

    // Nhúng file kết nối với database
    include('js/js.php');

    // Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    // Lấy dữ liệu từ file dangky.php
    $username   = addslashes(strtolower($_POST['txtUsername']));
    $password   = addslashes(strtolower($_POST['txtPassword']));
	$verify_password   = addslashes(strtolower($_POST['verify_password']));
	// Kiểm tra mật khẩu, bắt buộc mật khẩu nhập lúc đầu và mật khẩu lúc sau phải trùng nhau
if ( $password != $verify_password )
{
echo "Mật khẩu không giống nhau, bạn hãy nhập lại mật khẩu. <a href='javascript:history.go(-1)'> trở lại</a>";
exit;
}


    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        ?>
        </li>
    </ul>

<a href="/army/login.php">Quay lại trang đăng nhập</a>
<br /></div>           <br></div>
        
</div><br>
</div>
<div class="left_b_bottom"><div class="right_b_bottom"><div class="footer"><div class="left_bottom"></div><div class="right_bottom"></div></div></div></div>
 <div class="copyright"><h2 style="line-height: 0px;">Mobi Army Lậu</h2>
Bản Quyền thuộc về @TeaMobi - 2014
</div>
</div>

    </body>
</html>
        <?php
        exit;
    }

    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if(mysql_num_rows(mysql_query("SELECT user FROM user WHERE user='".$username."'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        ?>
        </li>
    </ul>

<a href="/army/login.php">Quay lại trang đăng nhập</a>
<br /></div>           <br></div>
        
</div><br>
</div>
<div class="left_b_bottom"><div class="right_b_bottom"><div class="footer"><div class="left_bottom"></div><div class="right_bottom"></div></div></div></div>
 <div class="copyright"><h2 style="line-height: 0px;">Mobi Army Lậu</h2>
Bản Quyền thuộc về @TeaMobi - 2014
</div>
</div>

    </body>
</html>
       <?php
        exit;
    }

    // Lưu thông tin thành viên vào bảng
	@mysql_query("INSERT INTO user(`user`, `password`, `lock`) VALUES ('".$username."','".$password."',1);");
	@$query = mysql_query("SELECT user_id FROM user WHERE user='".$username."' LIMIT 1;");
	if(mysql_num_rows($query) == 0){
		echo "Lỗi gì đó rồi ku, thử lại xem";
	} else {
		$row = mysql_fetch_array($query);
		$id  = $row['user_id'];
		@mysql_query("INSERT INTO armymem(id, xu, luong) VALUES (".$id.", 100000000, 50000);");
		// Thông báo quá trình lưu
		echo "Đăng ký thành công rồi. </br>Vui lòng kích hoạt bằng cách soạn tin nhắn theo cú pháp:  <font color='#FF7700'><b>ON ARMYLAU  ".$id."</b> </font>gửi<font color='#FF7700'> <b> 8585 </b></font> để kích hoạt tài khoản của bạn";
        ?>
        </li>
    </ul>

<a href="/army/login.php">Quay lại trang đăng nhập</a>
<br /></div>           <br></div>
        
</div><br>
</div>
<div class="left_b_bottom"><div class="right_b_bottom"><div class="footer"><div class="left_bottom"></div><div class="right_bottom"></div></div></div></div>
 <div class="copyright"><h2 style="line-height: 0px;">Mobi Army Lậu</h2>
Bản Quyền thuộc về @TeaMobi - 2014
</div>
</div>

    </body>
</html>
        <?php
	}
?>
    


