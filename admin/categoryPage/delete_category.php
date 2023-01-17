<?php

    include("../config.php");
    $c_id = $_GET['c_id'];
    $del = "delete from category where cate_sr = {$c_id}";
    $del_result = mysqli_query($conn,$del);
    
    if($del_result)
    {
        header('location: http://localhost/shoplux/admin/categoryPage/category.php');

    }




?>