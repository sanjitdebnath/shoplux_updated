<?php include("../header.php")?>
<style>
    .image_view .main_img img, .image_view .sub_img .img_box img{
    width: 100%;
}
#main_id .image_view .main_img .add_img, #main_id .image_view .sub_img .img_box .add_img
{
    display:none;
}
.edit_info
    {
        position: absolute;
        left: 0;
        top: 10px;
        padding: 5px 10px;
        /* background-color:rgb(2, 202, 2); */
        background-color:orange;
        color: white;
    }
</style>
    <div class="post_sec">
        <?php
        // header("Refresh:0");
                function update_funk($input_data)
                {
                    include("../config.php");
                    $sql_show = "select * from shop join users on shop.shop_sr = users.shop_id where shop.shop_sr = {$input_data}";
                $result_show = mysqli_query($conn,$sql_show);
                if(mysqli_num_rows($result_show)>0)
                {
                    while($rows = mysqli_fetch_assoc($result_show))
                    {
                        
                     ?>
            <form action="update_shop_detail.php" method="POST" enctype="multipart/form-data" id='main_id'>
            <div class="image_view">
                <div class="main_img">
                    <img src="shop_images/<?php echo $rows['main_img'];?>" alt="" id="main_img">
                    <input type="file" id="main_img_file" name="main_img" hidden>
                    <input type="hidden" name="old_main_img" value="<?php echo $rows['main_img'];?>" hidden>
                    <div class="add_img"><i class="fas fa-camera main_img_click"></i></div>

                </div>
                <div class="sub_img">
                    <div class="img_box">
                        <img src="shop_images/<?php echo $rows['sub1'];?>" alt="" id="sub1_img">
                        <input type="file" id="sub1_img_file" name="sub1" hidden>
                        <input type="hidden" name="old_sub1" value="<?php echo $rows['sub1'];?>" hidden>
                        <div class="add_img"><i class="fas fa-camera sub1_img_click"></i></div>
                    </div>
                    <div class="img_box">
                        <img src="shop_images/<?php echo $rows['sub2'];?>" alt="" id="sub2_img">
                        <input type="file" id="sub2_img_file" name="sub2" hidden>
                        <input type="hidden" name="old_sub2" value="<?php echo $rows['sub2'];?>" hidden>
                        <div class="add_img"><i class="fas fa-camera sub2_img_click"></i></div>
                    </div>
                    <div class="img_box">
                        <img src="shop_images/<?php echo $rows['sub3'];?>" alt="" id="sub3_img">
                        <input type="file" id="sub3_img_file" name="sub3" hidden>
                        <input type="hidden" name="old_sub3" value="<?php echo $rows['sub3'];?>" hidden>
                        <div class="add_img"><i class="fas fa-camera sub3_img_click"></i></div>
                    </div>
                </div>
            </div>
            <div class="input_field">
                <label>store name:</label>
                <input type="hidden" name="shop_sr" value="<?php echo $rows['shop_sr'];?>">
                <input type="text" name="store_name" value="<?php echo $rows['store_name'];?>" readonly>
            </div>
            <div class="input_field text_area">
                <label id="clk">description:</label>
                <textarea  cols="30" rows="10" id="sel" name="description" value='<?php echo $rows['store_desc'];?>' readonly><?php echo $rows['store_desc'];?></textarea>
            </div>
            <div class="input_field">
                <label>phone no:</label>
                <input type="text" name="phone_no" value="<?php echo $rows['phone_no'];?>" readonly>
            </div>
            <div class="input_field">
                <label>email:</label>
                <input type="email" name="email" value="<?php echo $rows['email'];?>" readonly>
            </div>
            <div class="input_field">
                <input type="submit" id="submit" class="update" name="update_shop" value="update" hidden>
            </div>
            </form>
            <?php
                }
                }
            }
            if($shop_id !=0)
            {
                update_funk($shop_id);  
            }
            elseif($shop_id_val!=0)
            {
                update_funk($shop_id_val);
            }
            else{
                // echo "this is a new user";
                ?>
            <form action="add_shop_detail.php" method="POST" enctype="multipart/form-data">
            <div class="image_view">
                <div class="main_img">
                    <img src="" alt="" id="main_img">
                    <input type="file" id="main_img_file" name="main_img" hidden required>
                    <div class="add_img"><i class="fas fa-camera main_img_click"></i></div>
                </div>
                <div class="sub_img">
                    <div class="img_box">
                        <img src="" alt="" id="sub1_img">
                        <input type="file" id="sub1_img_file" name="sub1" hidden required>
                        <div class="add_img"><i class="fas fa-camera sub1_img_click"></i></div>
                    </div>
                    <div class="img_box">
                        <img src="" alt="" id="sub2_img">
                        <input type="file" id="sub2_img_file" name="sub2" hidden required>
                        <div class="add_img"><i class="fas fa-camera sub2_img_click"></i></div>
                    </div>
                    <div class="img_box">
                        <img src="" alt="" id="sub3_img">
                        <input type="file" id="sub3_img_file" name="sub3" hidden required>
                        <div class="add_img"><i class="fas fa-camera sub3_img_click"></i></div>
                    </div>
                </div>
            </div>
            <div class="input_field">
                <label>store name:</label>
                <input type="text" name="store_name" required>
            </div>
            <div class="input_field text_area">
                <label id="clk">description:</label>
                <textarea  cols="30" rows="10" id="sel" name="description" required></textarea>
            </div>
            <div class="input_field">
                <label>phone no:</label>
                <input type="text" name="phone_no" required>
            </div>
            <div class="input_field">
                <label>email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="input_field">
                <input type="submit" id="submit" name="add_shop" value="submit">
            </div>
            </form>
            <?php
                }
                ?>
                <?php
                if($shop_id !=0 or $shop_id_val!=0)
                {
            ?>
            <div class="edit_info">view mode</div>
            <?php
            }
            ?>
    </div>
</body>
<script src="shop5.js"></script>
<Script>
var main_id = document.getElementById("main_id");
let edit_btn = document.querySelector('.edit button'); 
let view_btn = document.querySelector('.view button'); 
let add_img = main_id.querySelectorAll('.add_img'); 
let main_img_edit = main_id.querySelector('.main_img'); 
let sub_img_edit = main_id.querySelectorAll('.sub_img'); 
let input_field = main_id.querySelectorAll('.input_field input'); 
let text_area = main_id.querySelector('#sel'); 
let edit_info = document.querySelector('.edit_info'); 
let update = main_id.querySelector('.update'); 


edit_btn.addEventListener('click',()=>
{
    for (let i = 0; i < add_img.length; i++) {
        add_img[i].style.display = "flex";
    }
    for (let i = 0; i < input_field.length-1; i++) {
        input_field[i].removeAttribute("readonly");
        input_field[i].style.border = "2px solid rgb(104,212,127)";
    }
    edit_info.style.display = "block";
    edit_info.innerHTML = 'edit mode';
    edit_info.style.backgroundColor = "rgb(2, 202, 2)";
    text_area.removeAttribute("readonly");
    update.style.display = "block";
    view_btn.style.display = "block";
    edit_btn.style.display = "none";
    text_area.style.border = "2px solid rgb(104,212,127)";
})
view_btn.addEventListener('click',()=>
{
    // input_field[input_field.length-1].style.display="block";
    for (let i = 0; i < add_img.length; i++) {
        add_img[i].style.display = "none";
    }
    for (let i = 0; i < input_field.length-1; i++) {
        input_field[i].setAttribute("readonly",true);
        input_field[i].style.border = "1px solid grey";
    }
    edit_info.style.display = "block";
    edit_info.innerHTML = 'view mode';
    edit_info.style.backgroundColor = "orange";
    text_area.setAttribute("readonly",true);
    update.style.display = "none";
    view_btn.style.display = "none";
    edit_btn.style.display = "block";
    text_area.style.border = "1px solid grey";
})
</Script>
</html>