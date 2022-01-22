<head>
    <?php include '../../partials/head.php'?>
</head>

<div class="col-12 grid-margin stretch-card ">
    <div class="card">
        <div class="card-body">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Thêm Film Anime</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="forms-sample" action="../../PHP/util/filmAction.php" method="post"
                enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputUsername1">Tên Anime</label>
                    <input type="text" class="form-control" name="txt_tenFilm" id="exampleInputUsername2"
                        placeholder="Naruto/OnePiece...">
                </div>
                <div class="form-group">
                    <label for="exampleInputimg">Link Hình Ảnh</label>
                    <input type="img" class="form-control" name="txt_hinhAnh" id="exampleInputimg"
                        placeholder="link img">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">link phim</label>
                    <input type="text" class="form-control" name="txt_linkFilm" id="exampleInputUsername2"
                        placeholder="Naruto/OnePiece...">
                </div>
                <div class="modal-footer">
                    <a href="../tables/filmlist.php"><button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Đóng</button></a>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>