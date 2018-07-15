<!--我的相册-->
<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
	include_once "../conn.php"; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>我的相册</title>
		<style>
			#dk{
				width: 1900px;
				height: 955px;
				background: url(../images/KK1.jpg);
			}
			#xs{
				width: 1720px;
				height: 900px;
				position: absolute;top:6%;left: 10%;
				border: 1px solid red;
				font-size: 19px;
				color: #DAA520;
			}
		</style>
	</head>
	<body>
		<div id="dk">
			<a href="../index.php" style="text-decoration:none;font-size: 18px;position: absolute;top:20px;left: 5%;color: #6676FF;">个人首页</a>
			<span style="font-size: 20px;position: absolute;top:20px;left: 50%;color: #6676FF;">博客管理</span>
			<a href="ge1.php" style="text-decoration:none;color: #6676FF;font-size: 18px;position: absolute;top:60px;left: 5%;">我的文章</a>
			<a href="ge2.php" style="text-decoration:none;color: #6676FF;font-size: 18px;position: absolute;top:120px;left: 5%;">添加文章</a>
			<a href="ge4.php" style="text-decoration:none;color: #6676FF;font-size: 18px;position: absolute;top:240px;left: 5%;">我的相册</a>
			<a href="ge5.php" style="text-decoration:none;color: #6676FF;font-size: 18px;position: absolute;top:300px;left: 5%;">添加相册</a>
			<a href="ge7.php" style="text-decoration:none;color: #6676FF;font-size: 18px;position: absolute;top:420px;left: 5%;">我的资料</a>
			<a href="ge8.php" style="text-decoration:none;color: #6676FF;font-size: 18px;position: absolute;top:480px;left: 5%;">我的好友</a>
			<div id="xs">
				<!--编辑框-->
				<span style="position: absolute;top:20px;left: 45%;">查看相册</span>
				<p>程序猿跑路了 功能尚未实现</p>
			</div>
		</div>
		
	</body>
</html>
