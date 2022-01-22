<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../master/head.php'?>
</head>

<body>
    <div class="container-scroller d-flex">
      <!-- SIDEBAR  -->
        <?php include '../../master/sidebar.php'?>
        <div class="container-fluid page-body-wrapper">
             <!-- HEADER  -->
            <?php include '../../master/header.php'?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Đăng nhập</h4>
                                    <form class="forms-sample" action="../../PHP/util/loginController.php"
                                        method="post">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" name="txt_email" class="form-control"
                                                id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="txt_password" class="form-control"
                                                id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <button type="submit" name="txt_login" value="login"
                                            class="btn btn-primary mr-2">Đăng nhập</button>
                                        <a href="./registerForm.php">
                                            <button type="button" name="txt_dangKy" value="register"
                                                class="btn btn-primary mr-2">Đăng ký</button>
                                        </a>

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