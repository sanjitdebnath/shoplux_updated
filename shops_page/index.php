<?php include("../main_header.php")?>
    <link rel="stylesheet" href="../style5.css">
        <div id="top_shops">
            <div class="heading">top rated</div>
            <div class="container">
                <div class="box">
                    <img src="../singlePage/sg_images/main_img.jpg" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
                <div class="box">
                    <img src="../singlePage/sg_images/sub1.jpg" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
                <div class="box">
                    <img src="../singlePage/sg_images/sub2.jpg" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
                <div class="box">
                    <img src="../singlePage/sg_images/sub3.webp" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
                <div class="box">
                    <img src="../singlePage/sg_images/main_img.jpg" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
                <div class="box">
                    <img src="../singlePage/sg_images/sub3.webp" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div id="top_shops">
            <div class="heading">mostly visited</div>
            <div class="container">
                    <div class="box"><img src="../shops/img1.jpg" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
                <div class="box">
                    <img src="../shops/img2.jpg" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
                <div class="box">
                    <img src="../shops/img3.jpg" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
                <div class="box">
                    <img src="../shops/img4.jpg" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
                <div class="box">
                    <img src="../shops/img5.jpg" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
                <div class="box">
                    <img src="../shops/img6.jpg" alt="">
                    <div class="hov">
                        <div class="st_name">store name</div>
                        <button><a href="">view more</a></button>
                    </div>
                </div>
            </div>
            <script>
                let open = document.querySelector('.open');
                let close = document.querySelector('.close');
                let hamb = document.querySelector('.hamb');

                open.addEventListener('click',()=>{
                    hamb.style.right = 0;
                })
                close.addEventListener('click',()=>{
                    hamb.style.right = -100 + "%";
                })

                let nav_links = document.querySelectorAll('.c_links');

                for (let i = 0; i < nav_links.length; i++) {
                    nav_links[i].addEventListener('click',()=>
                    {
                        hamb.style.right = -100 + "%";
                        console.log("its work")
                    });
                }
            </script>
        </div>
        <?php include("../footer.php")?>