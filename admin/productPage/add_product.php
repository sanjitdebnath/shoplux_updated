<?php

    include("../config.php");
    if(isset($_POST['add_product']))
    {
            session_start();
            $user_id = $_SESSION['userid'];
            echo $user_id;
        // if(isset($_POST['pd_img']))
        // {
            $fileName = $_FILES['pd_img']['name'];
            $fileSize = $_FILES['pd_img']['size'];
            $fileTemp = $_FILES['pd_img']['tmp_name'];
            $fileType = $_FILES['pd_img']['type'];
            $uploaded_folder = "product_images/".$fileName;
            move_uploaded_file($fileTemp,$uploaded_folder);



            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_category = $_POST['product_category'];
            if($product_name!="" && $product_price!="" && $product_category!="")
            {
                $sql = "insert into product(product_name,product_price,user_pd,product_category,product_img) value('{$product_name}',{$product_price},{$user_id},{$product_category},'{$fileName}');";
                $sql .= "update category set no_of_item = no_of_item + 1 where cate_sr = {$product_category}";
                echo $result = mysqli_multi_query($conn,$sql) or die("product add failed");
                // die();
                if($result)
                {
                    echo "<div class='show_pop_signin'>product successfull added</div>";
                    header('location: http://localhost/shoplux/admin/productPage/product.php');
                }
            }
            else
            {
                echo "<div class='show_pop_signin' style='background-color:red'>please fill all the field</div>";
            }
        // }        

    }
    // include("category_add.php");
    
    
    ?>