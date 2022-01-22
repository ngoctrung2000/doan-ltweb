<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'view/assets/master/head.php'?>
</head>

<body>
    <div class="container-scroller d-flex">
        <!-- SIDEBAR  -->
        <?php include 'view/assets/master/sidebar.php'?>
        <div class="container-fluid page-body-wrapper">
            <!-- HEADER  -->
            <?php include 'view/assets/master/header.php'?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <form action="index.php?controller=filmcontroller&action=search"
                                enctype="multipart/form-data" method="POST">
                                <div class="form-group row">
                                    <input type="text" class="col-8 form-control" placeholder="Search Here..."
                                        aria-label="search" aria-describedby="search" name="search" id="search" />
                                    <button type="submit" class="col-4 btn btn-primary">Search</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Quản lý Film</h4>
                                    <!-- NÚT THÊM  -->
                                    <button type="button" class="btn btn-primary btn-icon-text" data-toggle="modal"
                                        data-target="#modalCreatUser">
                                        <!-- <i class="mdi mdi-file-check btn-icon-prepend"></i> -->
                                        Thêm Phim
                                    </button>
                                    <div class="table-responsive">
                                        <form action="">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Mã Phim</th>
                                                        <th>Tên</th>
                                                        <th>Miêu Tả</th>
                                                        <th>Hình</th>
                                                        <th>Đường dẫn</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    foreach ($data as $tl) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $tl['FilmID'];?></td>
                                                        <td><?php echo $tl['tenchitietFilm'];?></td>
                                                        <td><?php echo $tl['mieuTaFilm'];?></td>
                                                        <td><img src="view/assets/images/<?php echo $tl['anhFilm']?>"
                                                                style="height: 50px; width: 40px;"></td>
                                                        </td>
                                                        <td><?php echo $tl['urlFilm'];?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="submit" data-toggle="tooltip" title=""
                                                                    class="btn btn-link btn-danger"
                                                                    data-original-title="Remove">
                                                                    <a
                                                                        href="index.php?controller=filmcontroller&action=sua&id=<?php echo $tl['FilmID']?>">
                                                                        Cập nhật
                                                                </button></a>
                                                                <button type="submit" data-toggle="tooltip" title=""
                                                                    class="btn btn-link btn-danger"
                                                                    data-original-title="Remove">
                                                                    <a
                                                                        href="index.php?controller=filmcontroller&action=delete&id=<?php echo $tl['FilmID']?>">
                                                                        delete</a>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Cập Nhật Film</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php include '../forms/updatefilm.php'?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button type="button" class="btn btn-primary">Cập Nhật</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FOMR THÊM PHIM  -->
                    <div class="modal fade" id="modalCreatUser" data-backdrop="static" data-keyboard="false"
                        tabindex="-1" aria-labelledby="modalCreatUserLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-info">
                                    <form action="index.php?controller=filmcontroller&action=them"
                                        enctype="multipart/form-data" method="POST">
                                        <h5 id="staticBackdropLabel">Thêm phim</h5>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">mã phim</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter name" name="FilmID">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên phim</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter name"
                                                name="tenchitietFilm">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Miêu tả</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter email"
                                                name="mieuTaFilm">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Hình</label>
                                            <input type="file" class="form-control" id="anhFilm" name="anhFilm">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="exampleFormControlFile1">Video</label>
                                            <input type="file" multiple class="form-control" id="urlFilm"
                                                name="urlFilm">
                                        </div> -->
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Url</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Password" name="urlFilm">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Thêm</button>
                                        </div>
                                    </form>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php include'view/assets/master/footer.php'?>
        </div>
    </div>

</body>

</html>