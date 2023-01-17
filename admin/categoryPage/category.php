<?php include("../header.php")?>
    <link rel="stylesheet" href="../productPage/product2.css">
    <style>
        .body{
            position: relative;
        }
        .product_cont .add_product form{
            height: 200px;
        }
        .show_pop_login, .show_pop_signin{ 
            display: block;
            position: absolute;
            top: 70px;
            text-align: center;   
            padding: 5px 20px;
            background-color: rgb(0, 146, 0);
            color: white;
        }
        .show_pop_login{
            background-color: red;
        }
        a #edit, a #delete
{
    text-decoration: none;
    color: white;
}
    </style>
</head>
<body>
    <div class="product_cont">
        <div class="add_product">
            <?php
            // session_start();
        $user_id = $_SESSION['userid'];
                if(isset($_GET['up_id']))
                {
                    $up_id = $_GET['up_id'];
                    // echo $up_id;
                ?>
                <form action="category_update.php" method='POST'>
                <h2>update category</h2>
                <div class="input_field">
                    <label>category name:</label>
                    <?php
                    
                    include("../config.php");
                    
                    $sql_update = "select * from category where cate_sr = $up_id";
                    $result_update = mysqli_query($conn,$sql_update);
                    if(mysqli_num_rows($result_update)>0)
                    {
                        while($rows_up = mysqli_fetch_assoc($result_update))
                        {
                            ?>
                            <input type="hidden" name="up_id" value="<?php echo $rows_up['cate_sr'];?>">
                    <input type="text" name="category_name" value="<?php echo $rows_up['category_name'];?>">
                </div>
                <div class="input_field" id="submit">
                    <input type="submit" name="update_category" value="update">
                </div>
                    </form>
                           
                <?php
                    }
                }
            }
            else{
                ?>
            <form action="category_add.php" method='POST'>
               <h2>add category</h2>
               <div class="input_field">
                   <label>category name:</label>
                   <input type="text" name="category_name">
                </div>
                <div class="input_field" id="submit">
                    <input type="submit" name="add_category">
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
                
                $sql_show = "select * from category join users on category.user_cate=users.user_sr where category.user_cate ={$user_id} ";
                $result_show = mysqli_query($conn,$sql_show);
                if(mysqli_num_rows($result_show)>0)
                {
                    ?>
                <thead>
                    <th>sr no</th>
                    <th>category name</th>
                    <th>no of item</th>
                    <th>edit</th>
                    <th>delete</th>
                </thead>
                <tbody>
                <?php
                    $i=1;
                    while($rows = mysqli_fetch_assoc($result_show))
                    {
                ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $rows['category_name'];?></td>
                    <td><?php echo $rows['no_of_item'];?></td>
                    <td><a href="category.php?up_id=<?php echo $rows['cate_sr'];?>"><button id="edit">edit</button></a></td>
                    <td><a href="delete_category.php?c_id=<?php echo $rows['cate_sr'];?>"><button id="delete">delete</button></a></td>
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