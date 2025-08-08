<?php include_once "db.php";

$chk=$Admin->count($_POST);

if($chk){
    $_SESSION['admin']=1;
    to("../backend.php");
}else{
    echo "<script>alert('請輸入正確的帳號密碼');location.replace('../index.php?do=login')</script>";
}