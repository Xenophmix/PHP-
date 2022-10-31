<?php
$acc='kevin';
$pwd='1234';

$formAcc=$_POST['acc'];
$formPWD=$_POST['pwd'];

if($acc==$formAcc && $pwd==$formPWD){
    
    header("location:login.php?result=success");

}else{
    
    header("location:login.php?result=fail");

}

?>