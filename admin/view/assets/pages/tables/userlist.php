<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../master/head.php'?>
</head>

<body>

    <div class="container-scroller d-flex">
        <!-- SIDEBAR -->
        <?php include '../../master/sidebar.php'?>
        <div class="container-fluid page-body-wrapper">
            <!-- HEADER  -->
            <?php include '../../master/header.php'?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title btn_create">Quản lý user</h4>
                                    <a href="../forms/createuserPage.php">
                                        <button type="button" class="btn btn-primary btn-icon-text" data-toggle="modal"
                                            data-target="#modalCreatUser">
                                            <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                            Createuser
                                        </button>
                                    </a>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>tài khoản</th>
                                                    <th>password</th>
                                                    <th>status</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    
                                                    $json=file_get_contents('../../PHP/util/user.Json');
                                                    $jsonArray=json_decode($json,true);
                                                    $i=0;
                                                    foreach ($jsonArray as $users){
                                                        echo ' 
                                                        <tr>
                                                        <td>'.$users["userName"].'</td>
                                                        <td>'.$users["taiKhoan"].'</td>
                                                        <td>
                                                        <input type="password" disabled id="inputPassword5" value="'.$users["password"].'" class="form-control" aria-describedby="passwordHelpBlock">
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-success">online</label>
                                                        </td>
                                                        <td>
                                                        <form method="POST" action="./userlist.php">
                                                        <button type="button" class="btn btn-info btn-rounded btn-fw"
                                                        data-toggle="modal" data-target="#staticBackdrop">cập
                                                        nhật</button>
                                                    <button type="button"  
                                                        class="btn btn-danger btn-rounded btn-fw">Xóa</button>
                                                        </form>
                                                            
                                                        </td>
                                                    </tr>
                                                        ';
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
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
                                        <?php include '../forms/userform.php'?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Cập nhật</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalCreatUser" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="modalCreatUserLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Thêm user</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php include '../forms/userform.php'?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Thêm</button>
                                    </div>
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