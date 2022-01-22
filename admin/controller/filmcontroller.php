<?php
$action =isset($_GET['action'])?$_GET['action']:'index';
$film=new filmmodels();
if($action=='index')
{
	$data=$film->all();
    include 'view/phim/film.php';
}

if($action=='them'){
    $FilmID=$_POST['FilmID'];
    $tenchitietFilm=$_POST['tenchitietFilm'];
    $mieuTaFilm=$_POST['mieuTaFilm'];
    $urlFilm=$_POST['urlFilm'];
    
    
    $hinh=$_FILES['anhFilm']['name'];
    move_uploaded_file($_FILES['anhFilm']['tmp_name'], "view/assets/images/$hinh");
    //  $videoFilm=$_FILES['urlFilm']['name'];
    //  move_uploaded_file($_FILES['urlFilm']['tmp_name'], "view/assets/video/$videoFilm");
     $data=$film->insert($FilmID,$tenchitietFilm,$mieuTaFilm,$hinh,$urlFilm);
    header('location: ./index.php?controller=filmcontroller&action=index');
}
if($action=='delete')
{
  $FilmID= isset($_GET['id'])?$_GET['id']:'';
  if($FilmID!='')
  {
    $data=$film->delete($FilmID);
   header('location: ./index.php?controller=filmcontroller&action=index');
  }
}

if($action=='search'){
    $search=$_POST['search'];
    $data=$film->search($search);
    foreach($data as $tl){
        echo $tl['tenchitietFilm'];
    }
    include './view/phim/film.php';
     //header('location: ./index.php?controller=filmcontroller&action=index');
}
if($action=='sua')
{   
    $FilmID = isset($_GET['id'])?$_GET['id']:'';
     $dataSua =$film->hiensua($FilmID);
    include './view/phim/filmsua.php';
}
if($action=='thoat')
{
 header('location: ./index.php?controller=filmcontroller&action=index'); 
}
if($action=='xulysua')
{
    // $FilmID=$_POST['FilmID'];
    $tenchitietFilm=$_POST['tenchitietFilm'];
    $mieuTaFilm=$_POST['mieuTaFilm'];
    $hinh=$_FILES['anhFilm']['name'];
    move_uploaded_file($_FILES['anhFilm']['tmp_name'], "view/assets/images/$hinh");
    // $urlFilm=$_FILES['video']['name'];
    // move_uploaded_file($_FILES['video']['tmp_name'], "view/assets/video/$urlFilm");
     $urlFilm=$_POST['urlFilm'];
    // $hinh=time().'-'.$_FILES['hinh']['name'];
    // move_uploaded_file($_FILES['hinh']['tmp_name'], "views/assets/img/$hinh");

    $dataSua=$film->suaFILM($tenchitietFilm,$mieuTaFilm,$hinh,$urlFilm);
    header('location: ./index.php?controller=filmcontroller&action=index');
}



?>