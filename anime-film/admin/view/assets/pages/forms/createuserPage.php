<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../master/head.php'?>
</head>

<body>
    <!-- <?php include '../../PHP/util/fun-createuser.php'?> -->

    <div class="container-scroller d-flex">
       <!-- SIDEBAR  -->
        <?php include '../../partials/sidebar.php'?>
        <div class="container-fluid page-body-wrapper">
             <!-- HEADER  -->
            <?php include '../../master/header.php'?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">

                        <div class="col-12 grid-margin stretch-card ">
                            <div class="card">
                                <div class="card-body">

                                    <form class="forms-sample" action="../../PHP/util/userAction.php" method="post"
                                        enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Username</label>
                                            <input type="text" name="txt_userName" class="form-control"
                                                id="exampleInputUsername1" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tài khoản</label>
                                            <input type="email" name="txt_taiKhoan" class="form-control"
                                                id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="txt_password" class="form-control"
                                                id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include'../../master/footer.php'?>
            </div>
        </div>
    </div>
</body>


</html>