<?php include("../header.php")?>
    <div class="product_cont">
        <div class="add_product">
        <?php
        // session_start();
        $user_id = $_SESSION['userid'];
        if(isset($_GET['pd_id']))
        {
            $pd_id = $_GET['pd_id'];
            // echo $up_id;
        ?>


        <form action="update_product.php" method="POST" enctype="multipart/form-data">
                <h2>update product</h2>
                <?php
                    include("../config.php");
                    
                    $sql_update = "select * from product join category on product.product_category = category.cate_sr where pd_id = $pd_id";
                    $result_update = mysqli_query($conn,$sql_update);
                    if(mysqli_num_rows($result_update)>0)
                    {
                        while($rows_up = mysqli_fetch_assoc($result_update))
                        {
                            ?>
                <div class="input_field">
                    <label>product name:</label>
                    <input type="hidden" name="pd_id" value="<?php echo $rows_up['pd_id'];?>">
                    <input type="text" name="product_name" value="<?php echo $rows_up['product_name'];?>">
                </div>
                <div class="input_field">
                    <label>product price:</label>
                    <input type="text" name="product_price" value="<?php echo $rows_up['product_price'];?>">
                </div>
                <div class="input_field">
                    <label>category:</label>
                    <select name="product_category">
                    <option selected value="<?php echo $rows_up['cate_sr'];?>"><?php echo $rows_up['category_name'];?></option>
                        <?php
                    
                    include("../config.php");
                    
                    $sql_update = "select * from category join users on category.user_cate=users.user_sr where category.user_cate = {$user_id} ";
                    $result_update = mysqli_query($conn,$sql_update);
                    if(mysqli_num_rows($result_update)>0)
                    {
                        while($rows_up = mysqli_fetch_assoc($result_update))
                        {
                            ?>
                        <option value="<?php echo $rows_up['cate_sr'];?>"><?php echo $rows_up['category_name'];?></option>
                        <?php
                        }
                    }
                    ?>
                    </select>
                </div>
                <div class="input_field">
                    <label>upload image:</label>
                    <input type="file" name="pd_img">
                    <?php
                    
                    include("../config.php");
                    
                    $sql_update_pd = "select product_img from product";
                    $result_update_pd = mysqli_query($conn,$sql_update_pd);
                    if(mysqli_num_rows($result_update_pd)>0)
                    {
                        while($rows_up_pd = mysqli_fetch_assoc($result_update_pd))
                        {
                            ?>
                            <input type="hidden" name="old_pd_img" value="<?php echo $rows_up_pd['product_img'];?>" hidden>

                        <?php
                        }
                    }
                    ?>
                </div>
                <div class="input_field" id="submit">
                    <input type="submit" name="update_product" value="update">
                </div>
            </form>
            <?php
           }
            }
            }
            else{
            ?>







            <form action="add_product.php" method="POST" enctype="multipart/form-data">
                <h2>add product</h2>
                <div class="input_field">
                    <label>product name:</label>
                    <input type="text" name="product_name">
                </div>
                <div class="input_field">
                    <label>product price:</label>
                    <input type="text" name="product_price">
                </div>
                <div class="input_field">
                    <label>category:</label>
                    <select name="product_category">
                    <option selected >---select category---</option>

                    <?php
                    
                    include("../config.php");
                    
                    $sql_update = "select * from category join users on category.user_cate=users.user_sr where category.user_cate = {$user_id} ";
                    $result_update = mysqli_query($conn,$sql_update);
                    if(mysqli_num_rows($result_update)>0)
                    {
                        while($rows_up = mysqli_fetch_assoc($result_update))
                        {
                            ?>
                        <option value="<?php echo $rows_up['cate_sr'];?>"><?php echo $rows_up['category_name'];?></option>
                        <?php
                        }
                    }
                        ?>
                    </select>
                </div>
                <div class="input_field">
                    <label>upload image:</label>
                    <input type="file" name="pd_img">
                </div>
                <div class="input_field" id="submit">
                    <input type="submit" name="add_product">
                </div>
            </form>
            <?php
            }
            ?>
        </div>
        <div class="table_div">
        <table border="1">
            <?php
                include("../config.php");
                // $sql_show = "select * from product join user on product.user_pd = user.user_sr";
                $sql_show = "SELECT * FROM product
                        LEFT JOIN category ON product.product_category = category.cate_sr
                        LEFT JOIN users ON product.user_pd = users.user_sr where product.user_pd={$user_id}
                        ";
                $result_show = mysqli_query($conn,$sql_show);
                $i = 1;
                if(mysqli_num_rows($result_show)>0)
                {
                ?>
                <thead>
                    <th>sr no</th>
                    <th>product image</th>
                    <th>product name</th>
                    <th>product price</th>
                    <th>category</th>
                    <th>edit</th>
                    <th>delete</th>
                </thead>
                <tbody>
                    <?php
                    while($rows = mysqli_fetch_assoc($result_show))
                    {
                ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><img src="product_images/<?php echo $rows['product_img'];?>" alt=""></td>
                    <td><?php echo $rows['product_name'];?></td>
                    <td><?php echo $rows['product_price'];?></td>
                    <td><?php echo $rows['category_name'];?></td>
                    <td><a href="product.php?pd_id=<?php echo $rows['pd_id'];?>"><button id="edit">edit</button></a></td>
                    <td><a href="delete_product.php?pd_id=<?php echo $rows['pd_id'];?>&cate_id=<?php echo $rows['cate_sr'];?>"><button id="delete">delete</button></a></td>
                </tr>
                <?php
                    }
                    ?>
                    </tbody>
                <?php
                    }
                ?>
        </table>
        </div>
    </div>
</body>
</html>