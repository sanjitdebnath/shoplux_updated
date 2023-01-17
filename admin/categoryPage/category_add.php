<?php
    session_start();
    $user_id = $_SESSION['userid'];

    include("../config.php");
    if(isset($_POST['add_category']))
    {
        $category_name = $_POST['category_name'];
        if($category_name!="")
        {
            $sql = "insert into category(category_name,no_of_item,user_cate) value('{$category_name}',0,{$user_id})";
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