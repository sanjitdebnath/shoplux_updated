<?php include("../main_header.php")?>
<link rel="stylesheet" href="../style5.css">
<link rel="stylesheet" href="offer.css">

<div id="offer_sec_pg">
        <div class="heading">best offers</div>
        <div class="offer_container">
        <?php

            include("../config.php");
            $sql_pd = "select * from product";
            $sql_pd_result = mysqli_query($conn,$sql_pd);
            if(mysqli_num_rows($sql_pd_result)>0)
            {
                while($pd_row = mysqli_fetch_assoc($sql_pd_result))
                {     
            ?>   
                <div class="box">
                    <div class="imgbox">
                    <img src="../admin/productPage/product_images/<?php echo $pd_row['product_img'];?>" alt="">
                    </div>
                    <div class="pd_detail">
                        <div class="st_name"><?php echo $pd_row['product_name'];?></div>
                        <div class="price"><?php echo $pd_row['product_price'];?>Rs</div>
                        <button><a href="">add to cart</a></button>
                    </div>
                    <div class="offer">15% <span>Off</span></div>
                </div>           
            <?php
                }
            }
            else{
                echo "<h1 class='er_pd'>no product found</h1>";
            }
        ?>
            
            
        </div>
    </div>
<?php include("../footer.php")?>
