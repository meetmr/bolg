<?php
    /**
     *   退出登陆
     *   时间:2017年12月15日
     *   @王恒兵
     **/
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['admin']);
    echo "<script>alert('注销成功')</script>";
    echo "<script>location ='login.php'</script>";
?>