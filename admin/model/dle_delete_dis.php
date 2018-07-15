<?php
    /**
     * 删除评论
     * 时间:2017年12月16日
     * @王恒兵
     * */
    include '../init.php';
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'uploadfun.php';
    $art_id = $_GET['art_id'];
    $dis_id = $_GET['dis_id'];
    $sql_delete = "delete from discuss where dis_id = '$dis_id' ";
    $dao =  DAOPDO::getSingLenton();
    if($dao->exec($sql_delete)){
        echo "<script>location ='./management.php?art_id=$art_id'</script>";
    }else{
        echo "<script>alert('失败')</script>";
        echo "<script>location ='./management.php'</script>";
    }
?>