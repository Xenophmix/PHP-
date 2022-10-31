<?php
session_start();

$acc='kevin';
$pwd='1234';

$formAcc=$_POST['acc'];
$formPWD=$_POST['pwd'];

if($acc==$formAcc && $pwd==$formPWD){
    $_SESSION['login']=$formAcc;
}else{
    $_SESSION['error']="帳號或密碼錯誤";
}

header("location:login2.php");

?>