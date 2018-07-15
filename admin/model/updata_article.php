<?php
    /**
     * 更新文章
     * 时间:2017年12月18日
     * @王恒兵
     * */
    include '../init.php';
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'uploadfun.php';
    $art_id = input($_POST['art_id']);
    $title = input($_POST['title']);
    $summernote = $_POST['summernote'];
    $class = input($_POST['class']);
    $time = time();
    $updata_aricle = "update  article set col_id =$class,art_title='$title',art_content = '$summernote' where art_id = '$art_id' ";
    $dao =  DAOPDO::getSingLenton();  //实例化PDO对象
    if($dao->exec($updata_aricle)){
        echo "<script>location ='./article.php'</script>";
    }else{
        echo "<script>alert('更新失败')</script>";
        echo "<script>location ='./article.php'</script>";
    }
?>