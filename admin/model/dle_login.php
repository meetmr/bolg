<?php
    /**
     *   处理登陆
     *   时间:2017年12月15日
     *   @王恒兵
     **/

    include "../init.php";
    $user = post_check($_POST['user']);
    $pwd = post_check($_POST['pwd']);
    //******************************//
    $servername="localhost";
    $username="root";
    $password="root";
    $dbname="blog";
    try{
        $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        //设置pdo错误异常处理
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error:".$e->getMessage();
    }
    //预处理SQL并绑定参数
    $stmt=$conn->prepare("select * from user where user_user = :user_user AND user_pwd = :user_pwd");
    $params = array(
        'user_user' => $user,
        'user_pwd' => $pwd
    );
    $stmt->execute($params);

    $user_row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user_row ){
        $_SESSION['id'] = $user_row['user_id'];
        $_SESSION['admin'] = $user_row['user_admin'];
        echo "<script>alert('登陆成功')</script>";
        echo "<script>location ='../index.php'</script>";
    }else{
        echo "<script>alert('登陆失败')</script>";
        echo "<script>location ='./login.php'</script>";
    }

?>