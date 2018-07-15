<?php
    /**
     *   管理单个留言
     *   时间:2017年12月16日
     *   @王恒兵
     **/
    include '../init.php'; //加载项目配置文件
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'pages.class.php';
    login('./login.php');
    $art_id = $_GET['art_id'];
    $dao = DAOPDO::getSingLenton();  //实例化PDO对象
    $sql_art = "select article.art_id,article.col_id ,article.user_id,article.art_title,article.art_content ,article.aer_time, user.user_name,user.user_id,class.col_id,col_content from article,user,class WHERE article.col_id = class.col_id and article.user_id = user.user_id and art_id = '$art_id' ";
    $sql_dis = "select * from discuss where art_id = '$art_id'";
    $art_row = $dao->fetchRow($sql_art);
    $dis_row = $dao->fetchAll($sql_dis);

//    echo "<pre>";
//    var_dump($article_rew,$discuss_rew);
    include DIR_VIEW."management.html";

?>