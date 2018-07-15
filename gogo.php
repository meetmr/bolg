<!--登录-->
<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
	include_once "conn.php"; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>博客-登录</title>
		<style>
			#bj{
				width:900px;
				height:700px;
				border:1px solid red;
				position:absolute;top:10%;left:50%;
				margin:-50px 0 0 -450px;	
				font-size:18px;	
				text-align: center;	
				background: url(images/K1.jpg);
				text-decoration:none;
			}
			#dk{
				width:900px;
				height:300px;
				position:absolute;top:50%;left:50%;
				margin:-150px 0 0 -450px;	
				font-size:18px;	
				text-align: center;					
				text-decoration:none;	
				color: #0000CD;			
				}
				
		</style>
	</head>
	<body>
		<div id="bj">
			<a href="../blog/add.php" style="position: absolute;top:50px;left: 50px;text-decoration:none;">博 客 注 册</a>	
		<div id="dk">
		<form method="post" action="gogo.php" onsubmit="return show()">
			<tr style="height: 40px;">	
						<th>博 客 登 录</th>					
						<br><br>
						<th>用户名:</th>
						<td><input type="text" name="blogyh" id="blogyh" style="border: 1px solid #A6C8FF;width: 200px;height: 25px;font-size: 15px;"/></td>
			</tr>
			<br><br>
			<tr style="height: 40px;">						
						<th>密码:</th>
						<td><input type="password" id="blogqrmm" name="blogqrmm" style="border: 1px solid #A6C8FF;width: 200px;height: 25px;font-size: 15px;"/></td>
			</tr>
			<br><br>
			<input type="submit" value="登录" name="submit"  />
			<br>
						
		</form>
		</div>		
		</div>
	</body>
</html>
<?php	
	if(isset($_POST['submit'])){
		$blogyh = $_POST['blogyh'];
		$blogqrmm = $_POST['blogqrmm'];
		$sql_user = "select * from blogzc where  blogyh = '$blogyh' and blogqrmm = '$blogqrmm'";
		$sql_rew = mysqli_query($link,$sql_user);
		$sql_row = mysqli_fetch_assoc($sql_rew);
			if($sql_row){
			$id = $sql_row['blogid'];
			$_SESSION['id'] = $sql_row['blogid'];
			$_SESSION['blogyh'] = $sql_row['blogyh'];	
			
			$inset  = "update  blogzc set dl = dl+1 where blogid = $id";
			
//			echo $inset;
			mysqli_query($link,$inset);
			echo "<script>location='index.php'</script>";
		
		}
	}
?>