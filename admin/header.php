<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="shop2.css">
    <link rel="stylesheet" href="product2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        .admin_header
        {
            width: 100%;
            height: 50px;
            background-color: rgb(2, 143, 143);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 50px;
            color: white;
        }
        .logo{
            flex: 1;
        }
        .logo a{
            color: white;
            text-decoration: none;
            font-size: 2rem;
        }
        .links{
            flex: 2;
            margin-left: 100px;
        }
        .links ul{
            display: flex;
        }
        .links ul li{
            margin-right: 50px;
            list-style: none;
        }
        .links ul li a{
            color: white;
            text-decoration: none;
            font-size: 20px;
        }
        .edit{
            width: 100px;
            display: block;
        }
        .edit_sec{
            display: flex;
            justify-content:center;
            align-item:center;
            width: 70px;
            height: 30px;
        }
        .edit button, .view button{
            /* background-color: red; */
            transform: translateX(-100px);
            width: 70px;
            height: 30px;
            font-size: 18px;
            border-radius: 30px;
            outline: none;
            border: none;
            box-shadow: 1px 1px 5px black;
            cursor: pointer;
        }
        .view button{
            display :none;
        }
    </style>
</head>
<body><?php
include("../config.php");
                session_start();
                $username = $_SESSION['username'];
                $password = $_SESSION['password'];
                $shop_id = $_SESSION['shop_id'];

                $sql_shop_id = "select * from users where username = '$username' and password = '$password'";
                $sql_shop_id_result = mysqli_query($conn,$sql_shop_id);
                $shop_id_val = 0;
                if(mysqli_num_rows($sql_shop_id_result)>0)
                {
                    while($rows_shop_id = mysqli_fetch_assoc($sql_shop_id_result))
                    {
                        $shop_id_val = $rows_shop_id['shop_id'];
                    }
                }
                ?>
    <div class="admin_header">
        <div class="logo">
            <a href="/shoplux">shoplux</a>
        </div>
        <div class="links">
            <ul>
                <li><a href="../shopPage/shop.php">shop</a></li>
                <li><a href="../categoryPage/category.php">category</a></li>
                <li><a href="../productPage/product.php">products</a></li>
            </ul>
        </div>
        <?php
        $current_page =  basename($_SERVER['PHP_SELF']);
        // echo strcmp($current_page,"shop.php");
        if(0==strcmp($current_page,"shop.php") and ($shop_id !=0 or $shop_id_val!=0))
        {
            ?>
            <div class="edit_sec">
            <div class="edit">
                <button>edit</button>
            </div>
            <div class="view">
                <button>view</button>
            </div>
        </div>
        <?php
        }
        
        ?>
        
        
    </div>