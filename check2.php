<?php
session_start();

$users=[

        [
        "name"=>"kevin",
        "pwd"=>"1234",
        "level"=>"admin",
        ],
        [
        "name"=>"john",
        "pwd"=>"5678",
        "level"=>"user",
        ],
        [
        "name"=>"mary",
        "pwd"=>"1357",
        "level"=>"vip",
        ]

        ];


$formAcc=$_POST['acc'];
$formPWD=$_POST['pwd'];

$chk=false;
foreach($users as $user){
    if($user['name']==$formAcc && $user['pwd']==$formPWD){
        $chk=true;
        $_SESSION['login']=$user;
    }
}


if($chk){
    $_SESSION['login']=$formAcc;
    $times=$_COOKIE['times']+1;
    setcookie('times',$times,time()+(60*60*24*365));
}else{
    $error="帳號或密碼錯誤";
}


if(isset($error)){
    header("location:login2.php?error=$error");
}else{
    header("location:login2.php");
}
