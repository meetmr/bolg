<!--个人首页的查看 更改-->
<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
	include_once "conn.php"; 
	
	$id = $_SESSION['id'];
	$sql ="select * from blogzc where blogid = $id";
	$sql_rew = mysqli_query($link,$sql);
	$sql_row = mysqli_fetch_assoc($sql_rew);
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>个人中心</title>
		<style>
			#dk{
				width:1000px;
				height:800px;
				position:absolute;top:50%;left:50%;
				margin:-400px 0 0 -500px;	
				background: #FFFAF0;
			}
			#tx{
				width: 150px;
				height: 150px;
				position: absolute;top:6%;left: 45%;
			
			}
			#xk{
				width: 600px;
				height: 500px;
				position: absolute;top:30%;left: 25%;
				
			}
		</style>
	</head>
	<body>
		
		<form action="ku/aaa.php" method="post" enctype="multipart/form-data">
		<div id="dk">
			<a href="index.php"><span style="position: absolute;top:20px;left: 30px;">首  页</span></a>
			<div id="tx">
				<td>
					<img id="blogtx" name="blogtx" src="images/buddha/<?php echo $sql_row['blogtx']?>" width="100" height="100"">
						<input type="file" name="file" multiple="multiple" />
				</td>
			</div>
			
			<div id="xk">
				
				<table cellspacing="0" cellpadding="0" style="width: 100%;font-size:15px;">
					<br /><br /><br /><br />
					<tr style="height: 40px;position: absolute;top:20px;left: 150px;">
						<th>昵称:</th>
						<td><input  type="text" name="blognc" id="blognc" value="<?php echo $sql_row['blognc']?>" style="border: 1px solid #A6C8FF;width: 200px;height: 25px;font-size:15px;"/></td>
					</tr>
					<tr style="height: 40px;position: absolute;top:60px;left: 150px;">
						<th>性别:</th>
						<td><input  type="text" name="blogxb" id="blogxb" value="<?php echo $sql_row['blogxb']?>" style="border: 1px solid #A6C8FF;width: 80px;height: 25px;font-size:15px;"/></td>
					</tr>
					<tr style="height: 40px;position: absolute;top:110px;left: 150px;">
						<th>生日:</th>
						<td><input  type="date" name="blogsr" id="blogsr" value="<?php echo $sql_row['blogsr']?>" style="border: 1px solid #A6C8FF;width: 250px;height: 25px;font-size:15px;"/></td>
					</tr>
					<tr style="height: 40px;position: absolute;top:160px;left: 150px;">
						<th>签名:</th>
						<td>
							<textarea cols="50" name="bloggxqm" id="bloggxqm" rows="5"><?php echo $sql_row['bloggxqm']?></textarea>
						</td>
					</tr>
					<tr style="height: 40px;position: absolute;top:250px;left: 150px;">
						<th>QQ:</th>
						<td><input  type="text" name="blogQQ" id="blogQQ" value="<?php echo $sql_row['blogQQ']?>" style="border: 1px solid #A6C8FF;width: 250px;height: 25px;font-size:15px;"/></td>
					</tr>
					<tr style="height: 40px;position: absolute;top:290px;left: 150px;">
						<th>邮箱:</th>
						<td><input  type="text" name="blogyx" id="blogyx" value="<?php echo $sql_row['blogyx']?>" style="border: 1px solid #A6C8FF;width: 250px;height: 25px;font-size:15px;"/></td>
					</tr>
					 <tr style="height: 40px;position: absolute;top:330px;left: 150px;">
						<th>登录次数:<?php echo $sql_row['dl']?></th>
					</tr>
					<tr style="height: 40px;position: absolute;top:360px;left: 350px;">
						<td><input  type="submit"  value="更改" id=""  style="width: 50px;height: 25px;font-size:15px;"/></td>
					</tr>
				</table>
			</div>
		</div>
		</form>
	</body>
</html>
