<?php
    /**
     * 删除留言
     * 时间:2017年12月16日
     * @王恒兵
     * */
    include '../init.php';
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'uploadfun.php';
    $me_id = $_GET['me_id'];
    $delete_me = "delete from message where me_id = '$me_id' ";
    $dao =  DAOPDO::getSingLenton();
    if($dao->exec($delete_me)){
        echo "<script>location ='./message.php'</script>";
    }
?>