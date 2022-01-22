<?php
    $db=mysqli_connect("localhost","root","","ltweb");
    $sql= "SELECT * FROM film";
    $result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include 'view/assets/Layouts/Header.php' ?>
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.php">Categories</a>
                        <span>All</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-8"> -->
                <div class="product__page__content">
                    <div class="product__page__title">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6">
                                <div class="section-title">
                                    <h4>ALL</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="product__page__filter">
                                    <p>Order by:</p>
                                    <select>
                                        <option value="">A-Z</option>
                                        <option value="">1-10</option>
                                        <option value="">10-50</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        echo"<div class='row'>";
                            if(mysqli_num_rows($result)>0){
                            while($row= mysqli_fetch_array($result)){
                                echo"<div class='col-lg-4 col-md-6 col-sm-6'>";
                                echo"<a href='anime-details.php?ID={$row['FilmID']}'>";
                                echo"<div class='product__item'>";
                                echo"<div class='product__item__pic set-bg' data-setbg={$row['anhFilm']}>";
                                echo"<div class='ep'>18 / 18</div>";
                                echo"<div class='comment'><i class='fa fa-comments'></i> 11</div>";
                                echo"<div class='view'><i class='fa fa-eye'></i> 9141</div>";
                                echo"</div>";
                                echo"<div class='product__item__text'>";
                                echo  "<ul>";
                                echo" <li>Active</li>";
                                echo"<li>Movie</li>";
                                echo"</ul>";
                                echo"<h5><a href='anime-details.php?ID={$row['FilmID']}'>{$row['tenchitietFilm']}</aa></h5>";
                                echo"</div>";
                                echo"</div>";
                                echo"</a>";
                                echo"</div>";
                                    }
                                }
                                else{
                                    echo"<h2>No video to display</h2>";

                                }
                        ?>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/popular/popular-2.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Kizumonogatari III: Reiket su-hen</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/popular/popular-3.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Shirogane Tamashii hen Kouhan sen</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/popular/popular-4.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="#">Rurouni Kenshin: Meiji Kenkaku Romantan</a></h5>
            anime-details.php                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/popular/popular-5.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Mushishi Zoku Shou 2nd Season</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/popular/popular-6.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Monogatari Series: Second Season</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/recent/recent-1.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Great Teacher Onizuka</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/recent/recent-2.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Fate/stay night Movie: Heaven's Feel - II. Lost</a></h5>
                                            </div>
                                        </
                                </a>div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/recent/recent-3.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Mushishi Zoku Shou: Suzu no Shizuku</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/recent/recent-4.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Fate/Zero 2nd Season</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/recent/recent-5.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Kizumonogatari II: Nekket su-hen</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/recent/recent-6.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
        anime-details.php                                </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/trending/trend-1.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
        anime-details.php                                </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/trending/trend-2.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                                            </div>
                                        </
                                </a>div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/trending/trend-3.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Shingeki no Kyojin Season 3 Part 2</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/trending/trend-4.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Fullmetal Alchemist: Brotherhood</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/trending/trend-5.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Shiratorizawa Gakuen Koukou</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="img/trending/trend-6.jpg">
                                                <div class="ep">18 / 18</div>
                                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>Movie</li>
                                                </ul>
                                                <h5><a href="anime-details.php">Code Geass: Hangyaku no Lelouch R2</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        </div>
                    </div> -->
                    <!-- <div class="product__pagination">
                        <a href="#" class="current-page">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#"><i class="fa fa-angle-double-right"></i></a>
                    </div> -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <!--sidebar_view-->
                        <?php include 'view/assets/Layouts/Sidebar_View.php'?>
                        <!--sidebar_view_end-->
                    </div>
                </div>
                <div class="product__sidebar__comment">
                    <!--Product_Sidebar_Coment-->
                    <?php include 'view/assets/Layouts/Product_Sidebar_Conmment.php'?>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <?php include 'view/assets/Layouts/Footer.php'?>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>