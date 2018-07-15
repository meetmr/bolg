<?php
    /**
     *   留言入库
     *   时间:2017年12月19日
     *   @王恒兵
     **/
    include '../init.php'; //加载项目配置文件
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    $dao = DAOPDO::getSingLenton();
    $name = input($_POST['name']);
    $content = input($_POST['content']);
    $time = time();
    $insert_msg = "insert into message values(null,'$name','$content','暂无','$time')";
    if( @$_SESSION['liuyan'] < 3){
        if($dao->exec($insert_msg)){
            $_SESSION['liuyan'] +=1;
            echo "<script>alert('留言成功')</script>";
            echo "<script>location ='./message.php'</script>";
        }
    }else{
        echo "<script>alert('操作频繁')</script>";
        echo "<script>location ='./message.php'</script>";
    }
?>