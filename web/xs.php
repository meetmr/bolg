<!--前端 首页-->
<?php
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
	include_once "../conn.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blogger</title>
		<style>
			#d1{
				width: 100%;
				height: 250px;
				background: url(../images/k5.jpg);
			}
			#d2{
				height: 50px;
				background: #FFFAF0;
			}
			#d3{
				width: 300px;
				height: 600px;
				position: absolute;top:350px;
				
			}
			#nr{
				width: 60%;
				height: 800px;
				position: absolute;top:35%;left: 15%;
			}
			#d4{
				width: 60%;
				height: 1450px;
				position: absolute;top:350px;left: 15%;
				font-size: 19px;
				color: #1E90FF;
				text-indent:50px;
				
				
			}
		</style>
	</head>
	<body bgcolor="#FFFAF0">
		<div id="d1"></div>
		<div id="d2">
			<a href="../gogo.php" style="position: absolute;top:10px;left: 50px;text-decoration:none;font-size: 17px;font-family: arial;color: #0000CD;">登 录 /</a>
			<a href="../add.php" style="position: absolute;top:10px;left: 100px;text-decoration:none;font-size: 17px;font-family: arial;color: #0000CD;">注 册</a>
			<a href="xs.php" style="position: absolute;top:265px;left: 70%;color: #A6C8FF;font-size: 28px;text-decoration:none;">首页</a>
			<a href="jieshao.html" style="position: absolute;top:265px;left: 75%;color: #A6C8FF;font-size: 28px;text-decoration:none;">关于我</a>	
		</div>
		<div id="d3">
			<a  style="position: absolute;top:30px;left: 30%;color: #A6C8FF;font-size: 22px;text-decoration:none;">文章分类</a>
			<a href="xqsb.php" style="position: absolute;top:80px;left: 30%;color: #A6C8FF;font-size: 18px;text-decoration:none;">心情随笔</a>
			<a href="rszl.php" style="position: absolute;top:130px;left: 30%;color: #A6C8FF;font-size: 18px;text-decoration:none;">人生哲理</a>
			<a href="xyxs.php" style="position: absolute;top:180px;left: 30%;color: #A6C8FF;font-size: 18px;text-decoration:none;">学业学术</a>
			<a href="rj.php" style="position: absolute;top:230px;left: 30%;color: #A6C8FF;font-size: 18px;text-decoration:none;">日记</a>
		</div>
		<div id="d4">
			<p>无言</p>
			<p>春至不知暖</p>
			<p>夏至不知炎</p>
			<p>秋至不知萧</p>
			<p>冬至不知寒</p>

		</div>	
	</body>
</html>
