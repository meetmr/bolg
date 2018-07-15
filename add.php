<!--注册博客-->
<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
	include_once "conn.php"; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>博客注册</title>
		<style>
			#dk{
            	width: 50%;
            	height: 800px;
            	margin: 0 auto;
            	margin-top: 100px;
				background:#DCDCDC;
			}
			#k1{
				width: 50%;
				height: 800px;
				margin: 0 auto;
				float: left;
				
			}
			#zt{
				font-size:25px;
				margin-top: 30px;
				margin-left:50px ;
				text-align:center;
			}
			#zc{
				font-size:16px;
				position:absolute;right:37%;
			}
			
		</style>
		<script>
			function  show(){
        		var input = document.getElementsByClassName('')
            	if(document.getElementById('blogyh').value === ''){
                alert("请输入用户名");
                return false;
        		}else if(document.getElementById('blogQQ').value === ''){
                alert("请输入QQ");
                return false;	
                }else if(document.getElementById('blognc').value === ''){
                alert("请输入昵称");
                return false;	
                }else if(document.getElementById('blogyx').value === ''){
                alert("请输入Email");
                return false;	
                }else if(document.getElementById('blogsr').value === ''){
                alert("请输入生日");
                return false;	
                }else if(document.getElementById('blogmm').value === ''){
                alert("请输入密码");
                return false;	
                }else if(document.getElementById('blogqrmm').value === ''){
                alert("请输入确认密码");
                return false;	
                if(blogmm.value!=blogqrmm.value){
                	alert("密码与确认密码不同");
                	returen false;
                }
                }else if(document.getElementById('blogxb').value === ''){
                alert("请选择性别");
                return false;	
                }else if(document.getElementById('blogtx').value === ''){
                alert("请选择头像");
                return false;	
                }else if(document.getElementById('blognr').value === ''){
                alert("请输入个性签名");
                return false;	
                }else{
        			return true;
        		}
       		}	
		</script>
	</head>
	<body>
		<form action="../blog/ku/insert.php" method="post">
			<div id="dk">
				
				<div id="k1">
					<div id="zt">博客注册</div>	
					<a href="../blog/gogo.php"><span style="position: absolute;top:140px;left: 1100px;">博客登录</span></a>			
					<td>
						<img id="imageFace" src="images/buddha/1.jpg" width="100" height="100" style="position: absolute;top:30%;right:60%;">	
					</td>
				</div>
				<div id="k1">
				<table cellspacing="0" cellpadding="0" style="width: 100%;font-size:15px;">
					<br /><br /><br /><br />
					<tr style="height: 40px;">
						<th>用户名:</th>
						<td><input  type="text" placeholder="请输入英文用户名" name="blogyh" id="blogyh"  style="border: 1px solid #A6C8FF;width: 250px;height: 25px;font-size:15px;"/></td>
					</tr>
					<tr style="height: 40px;">
						<th>QQ:</th>
						<td><input type="text" placeholder="输入QQ" name="blogQQ" id="blogQQ"  style="border: 1px solid #A6C8FF;width: 250px;height: 25px;font-size: 15px;"/></td>
					</tr>
					<tr style="height: 40px;">
						<th>昵称:</th>
						<td><input type="text" placeholder="输入中文昵称" name="blognc" id="blognc"  style="border: 1px solid #A6C8FF;width: 250px;height: 25px;font-size: 15px;"/></td>
					</tr>
					<tr style="height: 40px;">
						<th>邮箱:</th>
						<td><input type="text" placeholder="输入@qq.com @163.com" name="blogyx" id="blogyx"  style="border: 1px solid #A6C8FF;width: 250px;height: 25px;font-size: 15px;"/></td>
					</tr>
					<tr style="height: 40px;">
						<th>生日:</th>
						<td><input type="date" name="blogsr" id="blogsr"  style="border: 1px solid #A6C8FF;width: 250px;height: 25px;font-size: 15px;"/></td>
					</tr>
					<tr style="height: 40px;">
						<th>密码:</th>
						<td><input type="password" placeholder="输入密码" name="blogmm" id="blogmm"  style="border: 1px solid #A6C8FF;width: 250px;height: 25px;font-size: 15px;"/></td>
					</tr>
					<tr style="height: 40px;">
						<th>确认密码:</th>
						<td><input type="password" placeholder="确认密码" name="blogqrmm" id="blogqrmm"  style="border: 1px solid #A6C8FF;width: 250px;height: 25px;font-size: 15px;"/></td>
					</tr>
					<tr style="height: 40px;">
						<th>性别:</th>
						<td>
							<input type="radio" value="男" name="blogxb" id="blogxb" checked />男
							<input type="radio" value="女" name="blogxb" id="blogxb" />女
							<input type="radio" value="保密" name="blogxb" id="blogxb" />保密
						</td>
					</tr>
					
					<tr style="height:40px;">
						<th>头像:</th>
						<td>
						<select name="blogtx" id="blogtx"  size="1"  style="width:auto;position: absolute;right:800px;top:510px;"
						 onchange="document.images['imageFace'].src='images/buddha/'
						  + options[selectedIndex].value+ '.jpg';" >
						<?php 
						    for($i=1;$i<=5;$i++){
						      echo  "<option value='$i' > 图片-$i </option>"; 
						    }
						 ?>
				       </select>
				       </td>
					</tr>
					
					<tr style="height: 50px;">
						<th>个性签名:</th>
						<td>
							<textarea cols="33" placeholder="输入个性签名" name="bloggxqm" id="bloggxqm" rows="6"></textarea>
						</td>
					</tr>
					
				</table>
						<div id="zc">
							<input type="submit" value="注册" name="sub" />&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" value="重置" name="rest"/>	
						</div>
						
				</div>
			</div>
		</form>
	</body>
</html>
