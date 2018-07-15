<!--个人中心的修改-->
<?php
	session_start();
		include_once "../conn.php";   //包含链接数据库的文件		
	include'../scfuntion.php';
	 $image = $_FILES['file'];
    $allow = array('image/jpeg', 'image/png', 'image/gif');
	 var_dump($image);
	$path = '../images/buddha/';
    $maxsize = 5242880;//0.5M
     if(!($image['error'] ==4)){  //判断是否选择了头像
            $result  = upload($image,$allow,$error,$path,$maxsize);

            $blognc = $_POST['blognc'];
            $blogxb = $_POST['blogxb'];
            $blogsr = $_POST['blogsr'];
            $bloggxqm = $_POST['bloggxqm'];
			$blogQQ = $_POST['blogQQ'];
			$blogyx = $_POST['blogyx'];
			$id = $_SESSION['id'];

		
		$strsql = "update blogzc set blogtx = '$result',blognc = '$blognc',blogxb = '$blogxb' ,blogsr = '$blogsr', bloggxqm = '$bloggxqm', blogQQ = '$blogQQ',blogyx = '$blogyx' where blogid = $id";
		echo $strsql;
		$result = mysqli_query($link,$strsql)or die('执行语句有误').mysqli_error();
		
		
		if($result){
		    header("location:../per.php");
		    
		}
		else {
		    echo "修改失败".mysqli_error($link);
		   }
		mysqli_close($link);  //关闭连接
    }





?>