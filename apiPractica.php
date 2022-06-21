<?php
require_once "ClassPractica.php";
$pr=new ClassPractica();
$action=$_GET['action'];
$l=$_GET['login'];
$p=$_GET['password'];
$n=$_GET['name'];
$s=$_GET['surname'];
$ph=$_GET['phone'];
$em=$_GET['email'];
if ($action =='add') {
    $pr->addName($l,$p,$n,$s,$ph,$em);
}

if ($action =='enter') {
    $pr->login($l,$p);
}

if ($action =='check') {
    $pr->get_us();
}

if ($action =='exit') {
    $pr->exit1();
}
