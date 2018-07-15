<!--添加相册-->
<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
	include_once "../conn.php"; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>添加相册</title>
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
			<form action="../ku/ccc.php" method="post">
			<div id="xs">
				<!--编辑框-->
				<p>程序猿跑路了 功能尚未实现</p>
				<span style="position: absolute;top:20px;left: 45%;">添加相册</span>
				<span style="position: absolute;top:50px;left: 10%;">相册名称:</span>
					<input type="text" id="xcmc" name="xcmc" style="position: absolute;top:50px;left: 20%;"/>
				<span style="position: absolute;top:100px;left: 10%;">相册类别:</span>
					<select name="xcnb" style="position: absolute;top:100px;left: 20%;">
						<option value="旅游">旅游</option>
						<option value="时光">时光</option>
						<option value="风景">风景</option>
						<option value="个人">个人</option>
					</select>
				<span style="position: absolute;top:200px;left: 10%;">上传图片:</span>
				<input type="file" name="file" multiple="multiple" style="position: absolute;top:200px;left: 20%;"/>
				<input type="submit" value="上传" width="20" style="position: absolute;top:35%;left: 35%;color: #6676FF;font-size: 16px;" />
				<input type="reset" value="重置" name="rest" style="position: absolute;top:35%;left: 45%;color: #6676FF;font-size: 16px;" />	
			</div>
			</form>
		</div>
	</body>
</html>
