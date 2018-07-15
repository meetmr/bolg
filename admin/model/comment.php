<?php
    /**
     *   评论管理
     *   时间:2017年12月15日
     *   @王恒兵
     **/
    include '../init.php'; //加载项目配置文件
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'pages.class.php';
    login('./login.php');
    $dao = DAOPDO::getSingLenton();  //实例化PDO对象
    $user_id = $_SESSION['id'];
    //分页*****************************************
    $sql = "select count(*) as sum from article ";
    $nun = $dao->fetchRow($sql);
    $row = $nun['sum'];  //得到总数量
    $page = new Page();
    $page -> now_page = isset($_GET['page'])?$_GET['page']:1;
    //每页显示几条记录
    $page -> pagesize = 20;
    //总的记录数
    $page -> total_pages = $row;
    $offset = ($page -> now_page - 1)*$page->pagesize;
    $size = $page -> pagesize;
    //************************************************
    $sql_art = "select article.art_id,article.col_id ,article.user_id,article.art_title,article.art_content ,article.aer_time, user.user_name,user.user_id,class.col_id,col_content from article,user,class WHERE article.col_id = class.col_id  and article.user_id = user.user_id  ORDER BY aer_time DESC   limit $offset, $size ";
    $art_row = $dao->fetchAll($sql_art);
    include DIR_VIEW."comment.html";
?>