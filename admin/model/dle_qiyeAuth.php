<?php
    /**
     *   添加文章
     *   时间:2017年12月16日
     *   @王恒兵
     **/
    include '../init.php'; //加载项目配置文件
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'uploadfun.php';
    login('./login.php');
    $allow = array('image/jpeg', 'image/png', 'image/gif');
    $root = $_SERVER['DOCUMENT_ROOT'];
    $host = $_SERVER['HTTP_HOST'];
    $path = $root.'/admin/public/upload';
    $path = str_replace('\\','/',$path.'/');
    $maxsize = 5242880;//0.5M
    $file = $_FILES['image'];
    $houzui =  get_extension($file['name']);
    $user_id = $_SESSION['id'];
    $title = input($_POST['title']);
    $summernote = $_POST['summernote'];
    $class = input($_POST['class']);
    $time = time();
    $dao =  DAOPDO::getSingLenton();  //实例化PDO对象
    if(!($file['error'] ==4)){  //判断是否选择了头像
        $result  = upload($file,$allow,$error,$path,$maxsize);
        if( $result && $houzui != 'php' && $houzui!='asp' && $houzui!='jsp' && $houzui!='exe'){
            $url = 'http://'.$host."/admin/public/upload/".$result;
            $insert_article = "insert into article (col_id,user_id,art_title,art_content,aer_time,art_cover)VALUES ('$class','$user_id','$title','$summernote',$time,'$url')";
            if($dao->exec($insert_article)){
                echo "<script>location ='./qiyeAuth.php'</script>";
            }else{
                echo "<script>alert('发布失败')</script>";
                echo "<script>location ='./qiyeAuth.php'</script>";
            }
        }else{
            echo "<script>alert('上传图片失败，请检查图片类型')</script>";
            echo "<script>location ='./qiyeAuth.php'</script>";
        }

    }else{
        echo "<script>alert('没有选择封面')</script>";
        echo "<script>location ='./qiyeAuth.php'</script>";
    }

?>