<!--添加文章-->
<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
	include_once "../conn.php"; 
	
	$id = $_SESSION['id'];
	$sql_user = "select * from blogzc where blogid = $id";
	$sql_rew = mysqli_query($link,$sql_user);
	$sql_row = mysqli_fetch_assoc($sql_rew);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>添加文章</title>
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
			<form action="../ku/bbb.php" method="post">
				<div id="xs">
				<!--编辑框-->
				<span style="position: absolute;top:20px;left: 45%;">添加博客文章</span>
				<span style="position: absolute;top:50px;left: 10%;">文章标题:</span>
					<input type="text" id="blbt" name="blbt" style="position: absolute;top:50px;left: 20%;"/>
				<span style="position: absolute;top:100px;left: 10%;">文章类别:</span>
					<select name="blnb" style="position: absolute;top:100px;left: 20%;">
						<option value="心情随笔">心情随笔</option>
						<option value="人生哲理">人生哲理</option>
						<option value="学业学术">学业学术</option>
						<option value="日记">日记</option>
					</select>
				<span style="position: absolute;top:150px;left: 10%;">录入文章:</span>
					<textarea id="blnr" name="blnr" cols="145" rows="33" style="position: absolute;top:150px;left: 20%;font-size: 18px;"></textarea>	
				<input type="submit" value="发布" width="20" style="position: absolute;top:95%;left: 45%;color: #6676FF;font-size: 16px;" />
				<input type="reset" value="重置" name="rest" style="position: absolute;top:95%;left: 55%;color: #6676FF;font-size: 16px;" />	
			</div>
			</form>
			
		</div>
		
	</body>
</html>
