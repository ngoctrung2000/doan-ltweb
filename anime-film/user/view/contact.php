<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'view/assets/Layouts/Header.php'?>
</head>
<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <header class="header">
        <?php include "view/assets/Layouts/HeaderSectionBegin.php" ?>
    </header>
    <!-- Header End -->

    <!--  Contact -->
    <section class="container" id="contact">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">

                <!-- Start form contact -->
                <form action="" class="w-50">
                    <div class="form-group">
                        <h3 style="color: white">Tên:  </h3>
                        <input type="text" placeholder="Nhập tên...." class="form-control">
                    </div>
                    <div class="form-group">
                        <h3 style="color: white">Nội dung:  </h3>
                        <textarea type="text" placeholder="Nhập nội dung...." class="form-control"></textarea>
                    </div>   
                    <button class="btn btn-success form-control">Gửi</button>   
                </form>

                <!-- End form contact -->
            </div>
        </div>
    </section>
</body>
</html>