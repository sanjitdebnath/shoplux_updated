<?php

    include("../config.php");
    if(isset($_POST['update_shop']))
    {
        if(empty($_FILES['main_img']['name']))
        {
            $new_main_img = $_POST['old_main_img'];
        }
        else{
            $fileName_main = $_FILES['main_img']['name'];
            $fileSize_main = $_FILES['main_img']['size'];
            $fileTemp_main = $_FILES['main_img']['tmp_name'];
            $fileType_main = $_FILES['main_img']['type'];
            $uploaded_folder = "shop_images/".$fileName_main;
            move_uploaded_file($fileTemp_main,$uploaded_folder);
            $new_main_img = basename($fileName_main);
        }

        if(empty($_FILES['sub1']['name']))
        {
            $new_sub1 = $_POST['old_sub1'];
        }
        else{
            $fileName_sub1 = $_FILES['sub1']['name'];
            $fileSize_sub1 = $_FILES['sub1']['size'];
            $fileTemp_sub1 = $_FILES['sub1']['tmp_name'];
            $fileType_sub1 = $_FILES['sub1']['type'];
            $uploaded_folder = "shop_images/".$fileName_sub1;
            move_uploaded_file($fileTemp_sub1,$uploaded_folder);
            $new_sub1 = basename($fileName_sub1);
        }



        if(empty($_FILES['sub2']['name']))
        {
            $new_sub2 = $_POST['old_sub2'];
        }
        else{
            $fileName_sub2 = $_FILES['sub2']['name'];
            $fileSize_sub2 = $_FILES['sub2']['size'];
            $fileTemp_sub2 = $_FILES['sub2']['tmp_name'];
            $fileType_sub2 = $_FILES['sub2']['type'];
            $uploaded_folder = "shop_images/".$fileName_sub2;
            move_uploaded_file($fileTemp_sub2,$uploaded_folder);
            $new_sub2 = basename($fileName_sub2);
        }




        if(empty($_FILES['sub3']['name']))
        {
            $new_sub3 = $_POST['old_sub3'];
        }
        else{
            $fileName_sub3 = $_FILES['sub3']['name'];
            $fileSize_sub3 = $_FILES['sub3']['size'];
            $fileTemp_sub3 = $_FILES['sub3']['tmp_name'];
            $fileType_sub3 = $_FILES['sub3']['type'];
            $uploaded_folder = "shop_images/".$fileName_sub3;
            move_uploaded_file($fileTemp_sub3,$uploaded_folder);
            $new_sub3 = basename($fileName_sub3);
        }


        // die();



        $shop_sr = $_POST['shop_sr'];
        $store_name = $_POST['store_name'];
        $description = $_POST['description'];
        $phone_no = $_POST['phone_no'];
        $email = $_POST['email'];
        // if($category_name!="")
        // {
            echo $sql = "UPDATE shop SET store_name = '$store_name', store_desc = '$description',phone_no = '$phone_no',email = '$email',main_img='{$new_main_img}',sub1='{$new_sub1}',sub2='{$new_sub2}',sub3='{$new_sub3}' where shop_sr = $shop_sr";
            $result = mysqli_query($conn,$sql) or die("shop update failed");
            if($result)
            {
                echo "<div class='show_pop_signin'>category successfull added</div>";
                header('location: http://localhost/shoplux/admin/shopPage/shop.php');
            }
        }
        // else
        // {
        //     echo "<div class='show_pop_signin' style='background-color:red'>please fill all the field</div>";
        // }

    // include("category_add.php");
    
    
    ?>