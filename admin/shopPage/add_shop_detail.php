<?php

    include("../config.php");
    if(isset($_POST['add_shop']))
    {

        // if(isset($_POST['main_img']))
        // {
            $fileName_main = $_FILES['main_img']['name'];
            $fileSize_main = $_FILES['main_img']['size'];
            $fileTemp_main = $_FILES['main_img']['tmp_name'];
            $fileType_main = $_FILES['main_img']['type'];
            $uploaded_folder = "shop_images/".$fileName_main;
            move_uploaded_file($fileTemp_main,$uploaded_folder);
        // }        
        // if(isset($_POST['sub1']))
        // {
            $fileName_sub1 = $_FILES['sub1']['name'];
            $fileSize_sub1 = $_FILES['sub1']['size'];
            $fileTemp_sub1 = $_FILES['sub1']['tmp_name'];
            $fileType_sub1 = $_FILES['sub1']['type'];
            $uploaded_folder = "shop_images/".$fileName_sub1;
            move_uploaded_file($fileTemp_sub1,$uploaded_folder);
        // }        
        // if(isset($_POST['sub2']))
        // {
            $fileName_sub2 = $_FILES['sub2']['name'];
            $fileSize_sub2 = $_FILES['sub2']['size'];
            $fileTemp_sub2 = $_FILES['sub2']['tmp_name'];
            $fileType_sub2 = $_FILES['sub2']['type'];
            $uploaded_folder = "shop_images/".$fileName_sub2;
            move_uploaded_file($fileTemp_sub2,$uploaded_folder);
        // }        
        // if(isset($_POST['sub3']))
        // {
            $fileName_sub3 = $_FILES['sub3']['name'];
            $fileSize_sub3 = $_FILES['sub3']['size'];
            $fileTemp_sub3 = $_FILES['sub3']['tmp_name'];
            $fileType_sub3 = $_FILES['sub3']['type'];
            $uploaded_folder = "shop_images/".$fileName_sub3;
            move_uploaded_file($fileTemp_sub3,$uploaded_folder);
        // }        
        // echo $fileName_main;

        $store_name = $_POST['store_name'];
        $store_desc = $_POST['description'];
        $phone_no = $_POST['phone_no'];
        $email = $_POST['email'];
        // if($product_name!="" && $product_price!="" && $product_category!="")
        // {
            $rand_val = rand(10,9999);
            $sql = "insert into shop(shop_sr,store_name,store_desc,phone_no,email,main_img,sub1,sub2,sub3) value({$rand_val},'{$store_name}','{$store_desc}','{$phone_no}','{$email}','{$fileName_main}','{$fileName_sub1}','{$fileName_sub2}','{$fileName_sub3}');";
            $sql .= "UPDATE users SET shop_id = $rand_val where shop_id=0";
            $result = mysqli_multi_query($conn,$sql) or die("product add failed");
            if($result)
            {
                echo "<div class='show_pop_signin'>product successfull added</div>";
                header('location: http://localhost/shoplux/admin/shopPage/shop.php');
            }
        // }
        // else
        // {
        //     echo "<div class='show_pop_signin' style='background-color:red'>please fill all the field</div>";
        // }
    }
    // include("category_add.php");
    
    
    ?>