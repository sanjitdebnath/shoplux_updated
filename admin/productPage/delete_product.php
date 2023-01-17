<?php

    include("../config.php");
    $pd_id = $_GET['pd_id'];
    $cate_id = $_GET['cate_id'];

    $del = "delete from product where pd_id = {$pd_id};";
    $del .= "update category set no_of_item = no_of_item - 1 where cate_sr = {$cate_id}";
    $del_result = mysqli_multi_query($conn,$del);
    
    if($del_result)
    {
        header('location: http://localhost/shoplux/admin/productPage/product.php');
    }
?>