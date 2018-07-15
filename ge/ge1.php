<!--我的文章-->
<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
	include_once "../conn.php"; 
	
	$id = $_SESSION['id'];
	$sql_user = "select * from blogwz where blogid = $id";
	$sql_rew = mysqli_query($link,$sql_user);
	$sql_row = mysqli_fetch_assoc($sql_rew);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>我的文章</title>
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
				<span style="position: absolute;top:20px;left: 45%;font-size: 20px;color: #6676FF;">文章列表</span>
				
				<table border="1" style="position: absolute;top:100px;left: 30%;text-align: center;">
				<tr>
					<th style="width:100px;">编号</th>
					<th style="width:100px;">类别</th>
					<th style="width:300px;">标题</th>
					<th style="width:100px;">操作</th>
					<th style="width:100px;">操作</th>
				</tr>
				<?php foreach($sql_rew as $sql_row):?>
				<tr>
					<td><?php echo $sql_row['blid']?></td>
					<td><?php echo $sql_row['blnb']?></td>
					<td><?php echo $sql_row['blbt']?></td>
					<td><a href="../xiugai.php?id=<?php echo  $sql_row['blid'];?>">修改</a></td>
					<td><a href="../del.php?id=<?php echo $sql_row['blid'];?>">删除</a></td>
				</tr>
				<?php endforeach;?>
			</div>
		</div>
	</body>
</html>
