<?php include("../main_header.php")?>
<link rel="stylesheet" href="../style5.css">
<link rel="stylesheet" href="style.css">
<style>
    .er_pd
    {
        text-align:center;
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        text-transform: capitalize;
        font-size: 60px;
        color: rgb(158, 131, 131);
        /* background-color :red; */
    }
</style>
<div class="main_box">
        <div class="main_header">
            <div class="cate_list">
                <ul>
                <?php
                include("../config.php");
                $sql_cate1 = "select * from category LIMIT 5";
                $sql_cate1_result = mysqli_query($conn,$sql_cate1);
                // $first_cate = 0;
                if(mysqli_num_rows($sql_cate1_result)>0)
                {
                    // $cate1_row = mysqli_fetch_assoc($sql_cate1_result);
                    // $first_cate =  $cate1_row['cate_sr'];/
                
                    ?>
                <!-- <li><a href="?category=<?php echo $cate1_row['cate_sr'];?>"><?php echo $cate1_row['category_name'];?></a></li> -->
                <?php
                    while($cate1_row = mysqli_fetch_assoc($sql_cate1_result))
                    {     
                ?>   
                    <li><a href="?category=<?php echo $cate1_row['cate_sr'];?>"><?php echo $cate1_row['category_name'];?></a></li>
                <?php
                    }
                }
                ?>
                    </ul>
                    <div class="drop_down">
                            <div class="drop_head">
                                more category
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="more_option">
                            <?php
                                include("../config.php");
                                $sql_cate2 = "select * from category LIMIT 5,10";
                                $sql_cate2_result = mysqli_query($conn,$sql_cate2);
                                if(mysqli_num_rows($sql_cate2_result)>0)
                                {
                                    while($cate2_row = mysqli_fetch_assoc($sql_cate2_result))
                                    {     
                                ?>   
                                    <div class="links"><a href="?category=<?php echo $cate2_row['cate_sr'];?>"><?php echo $cate2_row['category_name'];?></a></div>
                                <?php
                                    }
                                }
                            ?>
                            </div>
                    </div>


            </div>
            
            
        </div>

        <div class="products">
            <div class="pd_container container">
            <?php

                                include("../config.php");
                                if(isset($_GET['category']))
                                {
                                    $category = $_GET['category'];
                                    $sql_pd = "select * from product where product_category = {$category}";
                                }
                                else{
                                    $sql_pd = "select * from product";
                                    // $category =  $first_cate ;
                                    // echo $category;
                                }
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
                                else{
                                    echo "<h1 class='er_pd'>no product found</h1>";
                                }
                            ?>                                      
            </div>
        </div>
    </div>
    
<?php include("../footer.php")?>
