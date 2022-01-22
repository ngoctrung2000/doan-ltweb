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
                            <!-- <div class="card"> -->
                            <div class="card-body">
                                <h4 class="card-title btn_create">Đăng ký</h4>
                                <!-- NÚT THÊM  -->
                                <div class="table-responsive">
                                <form action="index.php?controller=dangkycontroller&action=dangky" method="POST">
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter email" name="adminEmail">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mật khẩu</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Password" name="adminpass">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="dangky">Đăng ký</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                                aria-describedby="emailHelp" placeholder="Enter email" name="usermail">
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