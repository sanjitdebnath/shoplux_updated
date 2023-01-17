<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="login_style.css">
</head>
<body>
    <?php include("config.php");?>
    <div class="cont">
        <div class="title">
            <span id="login">login</span>
            <span id="sign_in">sign in</span>
            <div class="back_btn"></div>
        </div>
        <div class="box">
            <div class="box_slide">
                <div class="log_in">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="input_field">
                        <input type="text" name="username"placeholder="username" required>
                    </div>
                    <div class="input_field">
                        <input type="text" name="password" placeholder="password" required>
                    </div>
                    <div class="input_field" id="login_btn">
                        <input type="submit" name="login"value="log in" id="log_btn">
                    </div>
                </form>
                </div>
                <div class="sign_in">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method='POST'>
                        <div class="input_field">
                            <input type="text" name="name" placeholder="name" required>
                        </div>
                        <div class="input_field">
                            <input type="text" name="username" placeholder="username" required>
                        </div>
                        <div class="input_field">
                            <input type="text" name="password" placeholder="password" required>
                        </div>
                        <div class="input_field" id="signin_btn">
                            <input type="submit" name="sign_in" value="sign in" id="sign_btn">
                        </div>
                    </form>
                </div>
                
                </div>
                </div>
                </div>
        <?php
        // login operation
            if(isset($_POST["login"]))
            {
                $username = $_POST["username"];
                $password = $_POST["password"];
                if($username=="" && $password=="")
                {
                    echo "<div class='show_pop_signin' style='background-color:red'>please fill all the field</div>";
                }
                else{
                    $sql = "select * from users where username = '{$username}' AND password = '{$password}'";
                    $result = mysqli_query($conn,$sql) or die("log in query failed");
                    if(mysqli_num_rows($result)>0)
                    {
                        while($rows = mysqli_fetch_assoc($result))
                        {
                            session_start();
                            $_SESSION['userid'] = $rows["user_sr"];
                            $_SESSION['username'] = $rows['username'];
                            $_SESSION['password'] = $rows['password'];
                            $_SESSION['shop_id'] = $rows['shop_id'];
                            header('location: http://localhost/shoplux/admin/shopPage/shop.php');
                        }
                    }
                    else{
                        echo "<div class='show_pop_login'>wrong username and password</div>";
                    }
                }
            }

            // sign in operation
            if(isset($_POST["sign_in"]))
            {
                $name = $_POST["name"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                if($name=="" && $username=="" && $password=="")
                {
                    echo "<div class='show_pop_signin' style='background-color:red'>please fill all the field</div>";
                }
                else{
                    $sql1 = "INSERT into users(name,username,password,shop_id)value('{$name}','{$username}','{$password}',0)";
                    $result1 = mysqli_query($conn,$sql1) or die("sign in query failed");
                    if($result1)
                    {
                        echo "<div class='show_pop_signin'>registration successfull complete</div>";
                    }
                }
            }
        ?>

</body>
<script src="login_script.js"></script>
</html>