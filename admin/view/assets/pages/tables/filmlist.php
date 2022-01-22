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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Quản lý Film</h4>
                                    <td>
                                        <a href="../forms/addfilm.php"><button type="button"
                                                class="btn btn-info btn-rounded btn-fw">Thêm phim</button></a>
                                    </td>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Tên Anime</th>
                                                    <th>Hình Ảnh</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $json=file_get_contents('../../PHP/util/film.Json');
                                                    $jsonArray=json_decode($json,true);
                                                    $i=0;
                                                    foreach ($jsonArray as $users){
                                                        echo ' 
                                                        <tr>
                                                        <td>'.$users["tenFilm"].'</td>
                                                        <td>
                                                        <img src="'.$users["hinhAnh"].'" alt="Image" class="imagee" style="border-radius:0%; width: 100px;height: 100px"
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

                </div>
            </div>
            <?php include'../../master/footer.php'?>
        </div>
    </div>

</body>

</html>