let left_arr = document.querySelector(".left_arr");
let right_arr = document.querySelector(".right_arr");
let slider = document.querySelector(".outer_slider");

let count = 1;
let slide_width = 0;
if (count == 1) {
    left_arr.style.visibility = "hidden";
}

right_arr.addEventListener("click", function () {
if(count==2)
{
    right_arr.style.visibility = "hidden";
}
else
{
    left_arr.style.visibility = "visible";
}
  slide_width = slide_width - 100;
  slider.style.left = slide_width + "%";
  console.log(slide_width);
  count++;
});

left_arr.addEventListener("click", function () {
    if (count == 2) {
      left_arr.style.visibility = "hidden";
    }
    else{
        right_arr.style.visibility = "visible";
    }
  slide_width = slide_width + 100;
  slider.style.left = slide_width + "%";
  console.log(slide_width);
  count--;
});



// media query navbar setting

let open = document.querySelector('.open');
let close = document.querySelector('.close');
let hamb = document.querySelector('.hamb');

open.addEventListener('click',()=>{
    hamb.style.right = 0;
})
close.addEventListener('click',()=>{
    hamb.style.right = -100 + "%";
})