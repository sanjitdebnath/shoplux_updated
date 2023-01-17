<?php include("main_header.php")?>
        <!-- hero section -->
        <div class="hero_sec">
            <div class="left_sec">
                <div class="heading">website for small case business </div>
                <div class="para">We have created this website to facilitate small shopkeepers to grow their business. Our mission is to bring everyone's business online. Because in this new age every shopkeeper should have an online shop. And that is why we have created this website.</div>
                <form action="searchPage/search.php" method="GET">
                    <input type="text" placeholder="search the product" name="search">
                    <button type="submit">search</button>
                </form>
                
            </div>
            <div class="right_sec">
                <!-- <img src="graph2.png" alt=""> -->
                <img src="hero_img.webp" alt="">
            </div>
        </div>
    </div>
    <!-- top shops -->
    <div id="top_shops">
        <div class="heading">top shops</div>
        <div class="container">
            <?php
                include("config.php");
                $sql_shop = "select * from shop limit 6";
                $sql_shop_result = mysqli_query($conn,$sql_shop);
                if(mysqli_num_rows($sql_shop_result)>0)
                {
                    while($shop_row = mysqli_fetch_assoc($sql_shop_result))
                    {     
            ?>   
                    <div class="box">
                        <img src="admin/shopPage/shop_images/<?php echo $shop_row['main_img'];?>" alt="image not present">
                        <div class="hov">
                            <div class="st_name"><?php echo $shop_row['store_name'];?></div>
                            <button><a href="singlePage/one_page_shop.php?shop_id=<?php echo $shop_row['shop_sr'];?>">view more</a></button>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>
            
        </div>
    </div>

    <!-- top category -->
    <div id="top_cat">
        <div class="heading">top category</div>
        <div class="container">
                <div class="box"><img src="cate/tech1.jpg" alt="">
                <div class="hov">
                    <div class="st_name">gadgets</div>
                    <button><a href="/shoplux/categoryPage/category.php">view more</a></button>
                </div>
            </div>
            <div class="box">
                <img src="cate/grocery.jpg" alt="">
                <div class="hov">
                    <div class="st_name">grocery</div>
                    <button><a href="/shoplux/categoryPage/category.php">view more</a></button>
                </div>
            </div>
            <div class="box">
                <img src="cate/medicine.jpg" alt="">
                <div class="hov">
                    <div class="st_name">medecine</div>
                    <button><a href="/shoplux/categoryPage/category.php">view more</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- offer section -->
    <div id="offer_sec">
        <div class="heading">best offers</div>
        <div class="container">
            <div class="box">
                <img src="offers/offer_pd3.webp" alt="">
                <div class="hov">
                    <div class="st_name">oreo biscuit</div>
                    <button><a href="">view more</a></button>
                </div>
                <div class="offer">15% <span>Off</span></div>
            </div>
            <div class="box">
                <img src="offers/offer_pd1.webp" alt="">
                <div class="hov">
                    <div class="st_name">butter</div>
                    <button><a href="">view more</a></button>
                </div>
                <div class="offer">15% <span>Off</span></div>
            </div>
            <div class="box">
                <img src="offers/offer_pd2.webp" alt="">
                <div class="hov">
                    <div class="st_name">medicine</div>
                    <button><a href="">view more</a></button>
                </div>
                <div class="offer">15% <span>Off</span></div>
            </div>
            <div class="box">
                <img src="offers/tech2.webp" alt="">
                <div class="hov">
                    <div class="st_name">sony headphone</div>
                    <button><a href="">view more</a></button>
                </div>
                <div class="offer">15% <span>Off</span></div>
            </div>
            <div class="box">
                <img src="offers/offer_pd5.jpg" alt="">
                <div class="hov">
                    <div class="st_name">smart watch</div>
                    <button><a href="">view more</a></button>
                </div>
                <div class="offer">15% <span>Off</span></div>
            </div>
            <div class="box">
                <img src="offers/offer_pd6.jpg" alt="">
                <div class="hov">
                    <div class="st_name">medicine</div>
                    <button><a href="">view more</a></button>
                </div>
                <div class="offer">15% <span>Off</span></div>
            </div>
            
        </div>
    </div>
    <!-- testimonial -->
    <div id="testimonial">
        <div class="heading">testimonial</div>
        <div class="t_box">
            <div class="outer_slider">
                <div class="slide">
                    <div class="image"><img src="test/my_img.png" alt=""></div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="comment">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo cumque quod fugit aliquid dignissimos eligendi dolor a, vitae magni cum. Ut culpa vitae tenetur reprehenderit eveniet corrupti obcaecati sit iure quibusdam! Mollitia ex magnam doloribus amet fugiat porro deserunt tempora maiores tenetur reiciendis dolores consequatur ipsum cum atque, ut officiis?
                    </div>
                    <button><a href="/shoplux/testimonial/testimonial.php">explore more</a></button>
                </div>
                <div class="slide">
                    <div class="image"><img src="test/test1.jpg" alt=""></div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="comment">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo cumque quod fugit aliquid dignissimos eligendi dolor a, vitae magni cum. Ut culpa vitae tenetur reprehenderit eveniet corrupti obcaecati sit iure quibusdam! Mollitia ex magnam doloribus amet fugiat porro deserunt tempora maiores tenetur reiciendis dolores consequatur ipsum cum atque, ut officiis?
                    </div>
                    <button>explore more</button>
                </div>
                <div class="slide">
                    <div class="image"><img src="test/test2.jpg" alt=""></div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="comment">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo cumque quod fugit aliquid dignissimos eligendi dolor a, vitae magni cum. Ut culpa vitae tenetur reprehenderit eveniet corrupti obcaecati sit iure quibusdam! Mollitia ex magnam doloribus amet fugiat porro deserunt tempora maiores tenetur reiciendis dolores consequatur ipsum cum atque, ut officiis?
                    </div>
                    <button>explore more</button>
                </div>

                
            </div>
            <div class="arrow">
                <i class="fas fa-chevron-left left_arr"></i>
                <i class="fas fa-chevron-right right_arr"></i>
            </div>
        </div>
    </div> 

    <?php include("footer.php")?>
    
