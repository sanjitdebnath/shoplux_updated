<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoplux</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="one_page_style5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>
<body>
    <div class="header">
        <div class="navbar">
            <div class="logo"><a href="/shoplux">shoplux</a></div>
            <i class="fas fa-bars open"></i>
            <div class="hamb">
                <i class="fas fa-times close"></i>
                <div class="nav_links">
                    <ul>
                        <li><a class="c_links" href="/shoplux">Home</a></li>
                        <li><a class="c_links" href="/shoplux/shops_page/index.php">top shop</a></li>
                        <li><a class="c_links" href="/shoplux/categoryPage/category.php">top category</a></li>
                        <li><a class="c_links" href="/shoplux/offerPage/offer.php">best offers</a></li>
                        <li><a class="c_links" href="/shoplux/testimonial/testimonial.php">testimonial</a></li>
                        <?php
                        $current_page =  basename($_SERVER['PHP_SELF']);
                        $current_page = dirname($_SERVER['PHP_SELF'])."/".$current_page;
                        // echo $current_page;
                        if(0==strcmp($current_page,"/shoplux/index.php"))
                        {
                        ?>
                        <!-- <li><a class="c_links" href="#testimonial">testimonial</a></li> -->
                        
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="sign_in_up">
                    <div class="sign_in"><a href="/shoplux/admin">sign in</a></div>
                    <div class="sign_up"><a href="/shoplux/admin">sign up</a></div>
                </div>
            </div>
        </div>