<?php

    include("../config.php");
    if(isset($_POST['update_category']))
    {
        $category_name = $_POST['category_name'];
        $up_cate_sr = $_POST['up_id'];
        echo $up_cate_sr;
        echo $category_name;
        if($category_name!="")
        {
            $sql = "UPDATE category SET category_name = '$category_name' where cate_sr = $up_cate_sr";
            $result = mysqli_query($conn,$sql) or die("category add failed");
            if($result)
            {
                echo "<div class='show_pop_signin'>category successfull added</div>";
                header('location: http://localhost/shoplux/admin/categoryPage/category.php');
            }
        }
        else
        {
            echo "<div class='show_pop_signin' style='background-color:red'>please fill all the field</div>";
        }
    }
    // include("category_add.php");
    
    
    ?>