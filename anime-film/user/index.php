
<?php 
include './config.php';
function loadClass($className)
{
    include "./models/$className.php";
}
spl_autoload_register('loadClass');
    
$c=isset($_GET['controller'])?$_GET['controller']:'trangchu';
    if ($c == 'trangchu')
    {
        include "controller/trangchucontroller.php";
    }
    // anime-details
    if ($c == 'anime-details')
    {
        include "controller/anime-detailscontroller.php";
    }

    // TRUNG 
    if ($c == 'anime-details')
    {
        include "controller/anime-detailscontroller.php";
    }
    if ($c == 'anime-details')
    {
        include "controller/anime-detailscontroller.php";
    }
    if ($c == 'blog-details')
    {
        include "controller/blog-detailscontroller.php";
    }
    if ($c == 'signup')
    {
        include "controller/signupcontroller.php";
    }
    if ($c == 'login')
    {
        include "controller/logincontroller.php";
    }
    if ($c == 'blog')
    {
        include "controller/blogcontroller.php";
    }
    if ($c == 'contact')
    {
        include "controller/contactcontroller.php";
    }