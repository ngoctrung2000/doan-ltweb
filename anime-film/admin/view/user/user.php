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
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <form action="index.php?controller=usercontroller&action=search"
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
                                    <h4 class="card-title btn_create">Quản lý user</h4>
                                    <!-- NÚT THÊM  -->
                                    <button type="button" class="btn btn-primary btn-icon-text" data-toggle="modal"
                                        data-target="#modalCreatUser">
                                        <!-- <i class="mdi mdi-file-check btn-icon-prepend"></i> -->
                                        Thêm Người dùng
                                    </button>
                                    </a>
                                    <div class="table-responsive">
                                        <form>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Tên</th>
                                                        <th>Email</th>
                                                        <th>Mật Khẩu</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($data as $arr) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $arr['userloginID'];?></td>
                                                        <td><?php echo $arr['usernamelogin'];?></td>
                                                        <td><?php echo $arr['usermail'];?></td>
                                                        <td><?php echo $arr['userpasslogin'];?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Task">
                                                                    <a
                                                                        href="index.php?controller=usercontroller&action=sua&id=<?php echo $arr['userloginID']?>">
                                                                        Cập nhật
                                                                </button></a>
                                                                <button type="submit" data-toggle="tooltip" title=""
                                                                    class="btn btn-link btn-danger"
                                                                    data-original-title="Remove">
                                                                    <a
                                                                        href="index.php?controller=usercontroller&action=delete&id=<?php echo $arr['userloginID'];?>">
                                                                        Xóa </a>
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
                                    <!-- admin tabale -->

                                </div>
                            </div>
                        </div>
                        <!-- admin table -->

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title btn_create">Quản lý user Admin</h4>
                                    <!-- NÚT THÊM  -->
                                    <!-- <button type="button" class="btn btn-primary btn-icon-text" data-toggle="modal"
                                        data-target="#modalCreatUser">
                                        <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                        Thêm admin
                                    </button> -->
                                    </a>
                                    <div class="table-responsive">
                                        <form>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>email</th>
                                                        <th>Mật Khẩu</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($dataAdmin as $arr) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $arr['adminID'];?></td>
                                                        <td><?php echo $arr['adminEmail'];?></td>
                                                        <td><?php echo $arr['adminpass'];?></td>
                                                        <td>
                                                            <div class="form-button-action">

                                                                <button type="submit" data-toggle="tooltip" title=""
                                                                    class="btn btn-link btn-danger"
                                                                    data-original-title="Remove">
                                                                    <a
                                                                        href="index.php?controller=usercontroller&action=deleteAdmin&id=<?php echo $arr['adminID'];?>">
                                                                        Xóa </a>
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
                                    <!-- admin tabale -->

                                </div>
                            </div>
                        </div>

                        <!-- -------------- -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Cập nhật user</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <?php include '../forms/userform.php'?> -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Cập nhật</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- FORM THÊM -->
                        <div class="modal fade" id="modalCreatUser" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="modalCreatUserLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-info">
                                        <form action="index.php?controller=usercontroller&action=them" method="POST">
                                            <h5 id="staticBackdropLabel">Thêm user</h5>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tên</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Enter name"
                                                    name="usernamelogin">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Enter email"
                                                    name="usermail">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mật khẩu</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Password" name="userpasslogin">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="them">Thêm</button>
                                            </div>
                                        </form>
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