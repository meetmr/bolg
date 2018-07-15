<!-- 前端 心情随笔-->
<?php
	
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
	include_once "../conn.php";
	
	$sql = "select * from blogwz where blnb='心情随笔'";
	$sql_rew = mysqli_query($link,$sql);
	$sql_row = mysqli_fetch_assoc($sql_rew);
?>
<!DOCTYPE html>
<html lang="zh-CN">
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
				position: absolute;top:35%;left: 15%;
			}
			#bq{
				width: 100%;
				height: 150px;
				font-size: 19px;
				color: #6666FF;
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
		<div id="nr">
			<?php foreach($sql_rew as $sql_row):?>
			<div id="bq">
				<table style="height:30px;">
					<tr>
						<td>&nbsp;&nbsp;文章标题:    <?php echo $sql_row['blbt']?></td>
						<td style="position: absolute;left: 70%;">发布时间:    <?php echo @date("Y-m-d H:i:s",$sql_row['time']);?></td>
					</tr>
					<tr>
						<td style="position: absolute;left:20px;">
							<?php
								   $content = mb_substr($sql_row['blnr'], 0, 50, 'utf-8' );
							?>
							<p><?php echo $content ?></p>
						</td>
					</tr>
					<tr>
						<td style="padding-left:1000px;padding-top:80px;"><a href="ydqw.php?id=<?php echo $sql_row['blid'];?>" style="text-decoration: none;">|阅读全文|</a></td>
					</tr>
				</table>
			</div>
			<?php endforeach;?>
			
		</div>	
	</body>
</html>