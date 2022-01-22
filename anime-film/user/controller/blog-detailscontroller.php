<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$film=new filmmodels();
if ($action=='index')
{
    $data=$film->all();
    include 'view/blog-details.php';
}
?>