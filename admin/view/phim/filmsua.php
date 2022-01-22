<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'view/assets/master/head.php'?>
</head>

<body>

    <div class="container-scroller d-flex">
        <!-- SIDEBAR -->
        <?php include 'view/assets/master/sidebar.php'?>
        <!-- <?php include '../../view/assets/master/sidebar.php'?> -->
        <div class="container-fluid page-body-wrapper">
            <!-- HEADER  -->
            <?php include 'view/assets/master/header.php'?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <!-- FORM CẬP NHẬT  -->
                            <!-- FORM CẬP NHẬT  -->
                            <form
                                action="index.php?controller=filmcontroller&action=xulysua&id=<?php echo $_GET['id']?>"
                                enctype="multipart/form-data" method="POST">
                                <?php
                                            // $data = get_class()  
                                            // foreach ((array) $data as $arr)
                                            // $user=new usermodels();
                                            // $data=$user;
                                            
                                            foreach ( $dataSua as $arr) {
                                            ?>
                                <h5 id="staticBackdropLabel">Cập nhật phim</h5>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">mã phim</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="mã phim" name="FilmID"
                                        value='<?php  echo $arr['FilmID'];?>'>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên phim</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Tên phim" name="tenchitietFilm"
                                        value='<?php  echo $arr['tenchitietFilm'];?>'>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Miêu tả</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Miêu tả" name="mieuTaFilm"
                                        value='<?php  echo $arr['mieuTaFilm'];?>'>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Hình</label>
                                    <input type="file" class="form-control" id="anhFilm" name="anhFilm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Url</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Url video" name="urlFilm"
                                        value='<?php  echo $arr['urlFilm'];?>'>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                        <a href="index.php?controller=filmcontroller&action=thoat">
                                            Close
                                        </a>
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <a href=""></a>
                                        Cập nhật
                                    </button>
                                </div>
                                <?php } ?>
                            </form>
                        </div>

                        <!-- FORM THÊM -->
                        <div class="modal fade" id="modalCreatUser" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="modalCreatUserLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-info">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <?php include '../forms/userform.php'?> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include'view/assets/master/footer.php'?>
            </div>
        </div>
    </div>


</body>


</html>