
<div class="product__sidebar__view">
    <div class="section-title">
        <h5>Top Views</h5>
    </div>
    <ul class="filter__controls">
        <li class="active" data-filter="*">Day</li>
        <li data-filter=".week">Week</li>
        <li data-filter=".month">Month</li>
        <li data-filter=".years">Years</li>
    </ul>
    <div class="filter__gallery">
        <?php    
                                //  if(mysqli_num_rows($result)>0){
                                //     while($row= mysqli_fetch_array($result)){

                                //         echo"<div class='product__sidebar__view__item set-bg mix month week'
                                //         data-setbg='{$row['anhFilm']}'>";
                                //         echo"<div class='ep'>18 / ?</div>";
                                //         echo"<div class='view'><i class='a fa-eye'></i> 9141</div>";
                                //         echo"<h5><a href='anime-details.php?ID={$row['FilmID']}'>{$row['tenchitietFilm']}'</a></h5>";
                                //         echo"</div>";
                                //     }
                                // }  else {

                                // }
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

    </div>