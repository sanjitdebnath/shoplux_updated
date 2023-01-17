<?php include("../main_header.php")?>
<?php

$shop_id =  $_GET['shop_id'];

?>
    <link rel="stylesheet" href="../style5.css">
    
    

    <div class="shop_profile">
            <?php
                include("../config.php");
                $sql_shop = "select * from shop where shop_sr = {$shop_id}";
                $sql_shop_result = mysqli_query($conn,$sql_shop);
                if(mysqli_num_rows($sql_shop_result)>0)
                {
                    while($shop_row = mysqli_fetch_assoc($sql_shop_result))
                    {     
            ?>   
        <div class="left_side">
            <div class="box">
                <img src="../admin/shopPage/shop_images/<?php echo $shop_row['main_img'];?>" alt="">
                <div class="lower_box">
                    <div class="sub_box"> <img src="../admin/shopPage/shop_images/<?php echo $shop_row['sub1'];?>" alt=""></div>
                    <div class="sub_box"> <img src="../admin/shopPage/shop_images/<?php echo $shop_row['sub2'];?>" alt=""></div>
                    <div class="sub_box"> <img src="../admin/shopPage/shop_images/<?php echo $shop_row['sub3'];?>" alt=""></div>
                </div>
            </div>
        </div>
        <div class="right_side">
            <div class="title"><?php echo $shop_row['store_name'];?></div>
            <div class="desc"><?php echo substr($shop_row['store_desc'],0,300)."...";?></div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="desc"><?php echo $shop_row['phone_no'];?></div>
            <div class="desc"><?php echo $shop_row['email'];?></div>
        </div>
        <?php
            }
        }
        ?>
    </div>
    

    <div class="products">
        <div class="pd_title">
            products
        </div>
        <div class="pd_container">
            <!-- <div class="pd_box">
                <div class="img_box">
                    <img src="../offers/offer_pd3.webp" alt="">
                </div>
            <div class="pd_sub_title">product nmae</div> -->
            <?php
                include("../config.php");
                $sql_pd = "SELECT * FROM users join product on users.user_sr = product.user_pd where users.shop_id = {$shop_id}";
                $sql_pd_result = mysqli_query($conn,$sql_pd);
                if(mysqli_num_rows($sql_pd_result)>0)
                {
                    while($pd_row = mysqli_fetch_assoc($sql_pd_result))
                    {     
            ?>  
            <div class="pd_box">
                <div class="img_box">
                    <img src="../admin/productPage/product_images/<?php echo $pd_row['product_img'];?>" alt="">
                </div>
                <div class="pd_sub_title"><?php echo $pd_row['product_name'];?></div>
            </div>
            <?php
                }
            }
            ?>
            
        </div>
        <div class="load_all">load all</div>
        <script>
                let open = document.querySelector('.open');
                let close = document.querySelector('.close');
                let hamb = document.querySelector('.hamb');

                open.addEventListener('click',()=>{
                    hamb.style.right = 0;
                })
                close.addEventListener('click',()=>{
                    hamb.style.right = -100 + "%";
                })

                let nav_links = document.querySelectorAll('.c_links');

                for (let i = 0; i < nav_links.length; i++) {
                    nav_links[i].addEventListener('click',()=>
                    {
                        hamb.style.right = -100 + "%";
                        console.log("its work")
                    });
                }
        </script>
    </div>









    <?php include("../footer.php")?>
        