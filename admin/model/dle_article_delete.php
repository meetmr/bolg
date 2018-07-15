<?php
    /**
     * 删除文章
     * 时间:2017年12月18日
     * @王恒兵
     *  删除文章 就要把文章关联的评论一带删除 并且也要把封面删除
     *  首先要查询出文章关联的评论
     * */
    include '../init.php';
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'uploadfun.php';
    $art_id = $_GET['art_id'];
    $sql_delete_article = "delete from article where art_id =  $art_id";
    $sql_delete_discuss = "delete from discuss where art_id =  $art_id ";
    $sql_delete_fm = "select art_cover from article where art_id =  $art_id";
    $dao = DAOPDO::getSingLenton();  //实例化PDO对象
    $fm = $dao->fetchColumn($sql_delete_fm);
    $fm = mb_substr($fm,-16,16);
    $fm = "../public/upload/".$fm;
    if($dao->exec($sql_delete_article)){
        if($dao->exec($sql_delete_discuss)){
            @unlink($fm);
             echo "<script>location ='./article.php'</script>";
        }
        @unlink($fm);
        echo "<script>location ='./article.php'</script>";
    }
?>