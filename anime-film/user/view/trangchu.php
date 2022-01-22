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

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php
                        // foreach ($data as $tl) {
                        //     echo"<div class='col-lg-4 col-md-6 col-sm-6'>";
                        //     echo"<a href='view/anime-details/anime-details.php?ID={$tl['FilmID']}'>"    ;
                        //     echo"<div class='product__item'>";
                        //     echo" <div class='product__item__pic set-bg' data-setbg='../admin/view/assets/images/$tl['anhFilm']'>";
                                                                                        
                        //     echo"           <div class='ep'>18 / 18</div>";
                        //     echo "            <div class='comment'><i class='fa fa-comments'></i> 11</div>";
                        //     echo"           <div class='view'><i class='fa fa-eye'></i> 9141</div>";
                        //     echo "        </div>";
                        //     echo"       <div class='product__item__text'>";
                        //     echo"           <ul>";
                        //     echo "               <li>Active</li>";
                        //     echo"                <li>Movie</li>";
                        //     echo"           </ul>";
                        //     echo"            <h5><a href='../admin/view/assets/animedetailid.php'>{$tl['tenchitietFilm']}</a></h5>";
                        //     echo"        </div>";
                        //     echo"   </div>";
                        //     echo"    </a>";
                        //     echo" </div>"  ;
                        // }
                        // TRUNG 
                        foreach ($data as $tl) {
                        ?>
                        <div class='col-lg-4 col-md-6 col-sm-6'>;
                             <a> <?php echo $tl['FilmID'];?></a>
                             <div class='product__item'>;
                              <div class='product__item__pic set-bg' >
                              <img src="../admin/view/assets/images/<?php echo $tl['anhFilm']?>">
                                                                                                                 
                                        <div class='ep'>18 / 18</div>;
                                          <div class='comment'><i class='fa fa-comments'></i> 11</div>
                                        <div class='view'><i class='fa fa-eye'></i> 9141</div>
                                      </div>;
                                    <div class='product__item__text'>
                                        <ul>;
                                             <li>Active</li>
                                             <li>Movie</li>
                                        </ul>;
                                         <h5><a> <?php echo $tl['tenchitietFilm'];?></a></h5>
                                     </div>
                                </div>
                                 </a>
                              </div>  
                        <?php
                        }
                        ?>
                            <!-- // if(mysqli_num_rows($data)>0){
                            // while($row= mysqli_fetch_array($data)){
                            // echo"<div class='col-lg-4 col-md-6 col-sm-6'>";
                                // echo"<a href='view/anime-details/anime-details.php?ID={$row[' FilmID']}'>" ;
                                    // echo"<div class='product__item'>";
                                        // echo" <div class='product__item__pic set-bg'
                                            data-setbg='../../admin/view/assets/imges/{$row[' anhFilm']}'>";
                                            // echo" <div class='ep'>18 / 18</div>";
                                            // echo " <div class='comment'><i class='fa fa-comments'></i> 11</div>";
                                            // echo" <div class='view'><i class='fa fa-eye'></i> 9141</div>";
                                            // echo " </div>";
                                        // echo" <div class='product__item__text'>";
                                            // echo" <ul>";
                                                // echo " <li>Active</li>";
                                                // echo" <li>Movie</li>";
                                                // echo" </ul>";
                                            // echo" <h5><a
                                                    href='../admin/view/assets/animedetailid.php'>{$row['tenchitietFilm']}</a>
                                            </h5>";
                                            // echo" </div>";
                                        // echo" </div>";
                                    // echo" </a>";
                                // echo" </div>" ;

                            // }
                            // }
                            // else{
                            // echo"<h2>No video to display</h2>";

                            // }
                            // <h5><a href="anime-details.php">The Seven Deadly Sins: Wrath of the Gods</a></h5> -->
                            <!-- ?> -->
                            <!-- <div class="col-lg-4 col-md-6 col-sm-6">
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
                                    </div>
                                </a>
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
                                </a>
                            </div>
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
                                </a>
                            </div>
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
                                </a>
                            </div>
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
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="img/popular/popular-1.jpg">
                                            <div class="ep">18 / 18</div>
                                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>Active</li>
                                                <li>Movie</li>
                                            </ul>
                                            <h5><a href="anime-details.php">Sen to Chihiro no Kamikakushi</a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
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
                                </a>
                            </div>
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
                                </a>
                            </div>
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
                                            <h5><a href="anime-details.php">Rurouni Kenshin: Meiji Kenkaku Romantan</a>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
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
                                </a>
                            </div>
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
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recently Added Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
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
                                </a>
                            </div>
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
                                            <h5><a href="anime-details.php">Fate/stay night Movie: Heaven's Feel - II.
                                                    Lost</a></h5>
                                        </div>
                                    </div>
                                </a>
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
                                </a>
                            </div>
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
                                </a>
                            </div>
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
                                </a>
                            </div>
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
                                            <h5><a href="anime-details.php">The Seven Deadly Sins: Wrath of the Gods</a>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="live__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Live Action</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="img/live/live-1.jpg">
                                            <div class="ep">18 / 18</div>
                                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>Active</li>
                                                <li>Movie</li>
                                            </ul>
                                            <h5><a href="anime-details.php">Shouwa Genroku Rakugo Shinjuu</a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="img/live/live-2.jpg">
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
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="img/live/live-3.jpg">
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
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="img/live/live-4.jpg">
                                            <div class="ep">18 / 18</div>
                                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>Active</li>
                                                <li>Movie</li>
                                            </ul>
                                            <h5><a href="anime-details.php">The Seven Deadly Sins: Wrath of the Gods</a>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="img/live/live-5.jpg">
                                            <div class="ep">18 / 18</div>
                                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>Active</li>
                                                <li>Movie</li>
                                            </ul>
                                            <h5><a href="anime-details.php">Fate/stay night Movie: Heaven's Feel - II.
                                                    Lost</a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a href="anime-details.php">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="img/live/live-6.jpg">
                                            <div class="ep">18 / 18</div>
                                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>Active</li>
                                                <li>Movie</li>
                                            </ul>
                                            <h5><a href="anime-details.php">Kizumonogatari II: Nekketsu-hen</a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
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


</body>

</html>