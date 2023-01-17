<?php include("../main_header.php")?>
<link rel="stylesheet" href="../style5.css">
<link rel="stylesheet" href="search1.css">
<div id="search_sec">
<?php
if(isset($_GET['search']))
{
    $search_data = $_GET['search'];
    $sql_pd = "select * from product WHERE product_name like '%$search_data%'";
}
else{
    $search_data = "all data";
    $sql_pd = "select * from product";
}
?>
        <div class="heading">
            <div class="search_name">
                search : <?php echo $search_data;?>
            </div>
            <form action="search.php" method="GET">
                <input type="text" placeholder="search the product" name="search">
                <button type="submit">search</button>
            </form>
        </div>
        <div class="search_container">
        <?php
                include("../config.php");
                // $sql_pd = "select * from product WHERE product_name like '%$search_data%'";
                // $sql_pd = "select * from product";
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
