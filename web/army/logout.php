<!-- ****************************
     ****************************
     ***    Tác giả: Đạt Văn  ***   
     ***    fb.com/nhockm4v   ***
     ***    01286546653       ***
     ****************************  
     ****************************  -->
	 <?php session_start(); 
 
if (isset($_SESSION['id'])){
    unset($_SESSION['id']); // xóa session login
	header('Location: /army/login.php');
}
?>
