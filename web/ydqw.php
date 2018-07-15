<!--前端 阅读全文-->
<?php
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
	include_once "../conn.php"; 
		
	$id = $_GET['id'];
	$sql_wz = "select * from blogwz where blid = $id";
	$sql_rew = mysqli_query($link,$sql_wz);
	$sql_row = mysqli_fetch_assoc($sql_rew);
	$blogid = $sql_row['blogid'];
	$sql_zc = "select blognc from blogzc where blogid = $blogid";
	$sql_r = mysqli_query($link,$sql_zc);
	$sql_w = mysqli_fetch_assoc($sql_r);
	
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
			#ys{
				width: 70%;
				position: absolute;top: 40%;left: 10%;
				font-size: 19px;
				color: #9AA4FF;
				background: #000099;
			}
		</style>
	</head>
	<body bgcolor="#FFFAF0">
		<div id="d1"></div>
		<div id="d2">
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
		<div id="ys">
			<span style="position: absolute;top:10px;left: 20%;">文章标题:    <?php echo $sql_row['blbt']?></span>
			<span style="position: absolute;top:10px;left: 50%;">作者:    <?php echo $sql_w['blognc']?></span>
			<span style="position: absolute;top:10px;left: 70%;">发布时间:    <?php echo @date("Y-m-d H:i:s",$sql_row['time']);?></span>					
			<span style="position: absolute;top:60px;left: 20%;text-indent:50px;"><?php echo $sql_row['blnr']?></span>
		</div>
	</body>
</html>