<?php
include './config.php';
function loadClass($className)
{
    include "./models/$className.php";
}
spl_autoload_register('loadClass');

$c = isset($_GET['controller'])?$_GET['controller']:'dangnhapcontroller';

if ($c=='dangnhapcontroller')
{
    include './controller/dangnhapcontroller.php';
}
if ($c=='usercontroller')
    {
        include 'controller/usercontroller.php';
    }
    if ($c=='filmcontroller')
    {
        include 'controller/filmcontroller.php';
    }
    if ($c == 'dangkycontroller')
    {
        include "./controller/dangkycontroller.php";
    }
?>