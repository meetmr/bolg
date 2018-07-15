<!--注销登录-->
<?php
	session_start();
		header('Content-Type:text/html;charset=utf-8');  //设置字符编码
		unset($_SESSION['id']);
		echo "<script>alert('注销成功')</script>";
		echo "<script> location='gogo.php'</script>";
?>