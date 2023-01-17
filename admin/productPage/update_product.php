<?php

    include("../config.php");
    if(isset($_POST['update_product']))
    {
        if(empty($_FILES['pd_img']['name']))
        {
            $new_pd_img = $_POST['old_pd_img'];
            echo $new_pd_img;
        }
        else{
            $fileName = $_FILES['pd_img']['name'];
            $fileSize = $_FILES['pd_img']['size'];
            $fileTemp = $_FILES['pd_img']['tmp_name'];
            $fileType = $_FILES['pd_img']['type'];
            $uploaded_folder = "product_images/".$fileName;
            move_uploaded_file($fileTemp,$uploaded_folder);
            $new_pd_img = basename($fileName);
        }
        $pd_id = $_POST['pd_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_category = $_POST['product_category'];


        echo $new_pd_img;


    

            $sql = "UPDATE product SET product_name = '$product_name', product_price = $product_price , product_category = $product_category, product_img='{$new_pd_img}' where pd_id = $pd_id";
            $result = mysqli_query($conn,$sql) or die("product update failed");
            if($result)
            {
                echo "<div class='show_pop_signin'>category successfull added</div>";
                header('location: http://localhost/shoplux/admin/productPage/product.php');
            }
    }
    // include("category_add.php");
    
    
    ?>