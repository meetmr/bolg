<?php
    /**
     *   编辑文章
     *   时间:2017年12月18日
     *   @王恒兵
     **/
    include '../init.php'; //加载项目配置文件
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'pages.class.php';
    login('./login.php');
    $art_id = $_GET['art_id'];
    $sql_article = "select * from article where art_id = $art_id";
    $dao = DAOPDO::getSingLenton();  //实例化PDO对象
    $article_rew = $dao->fetchRow($sql_article);
    $sql_class = "select * from class ";
    $class_rew = $dao->fetchAll($sql_class);
    include DIR_VIEW."editors.html";
?>