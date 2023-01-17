let slider = document.querySelector('.slider');

let left_arr = document.querySelector('.left_arr');
let right_arr = document.querySelector('.right_arr');
let test_box = document.querySelectorAll('.test_box');

let count = 0;
for (let i = 0; i < test_box.length; i++) {
count++;
}
console.log(count);



slider.style.width = (count * 100)+"%"; 
let i = 1;
let slide_width = 0;

if (slide_width == 0) {
    left_arr.style.visibility = "hidden";
}
if(i==(count))
    {
        right_arr.style.visibility = "hidden";
    }
right_arr.addEventListener("click", function () {
    slide_width = slide_width - 100;
    // console.log("side width : "+slide_width+" count : "+count);

    if(i<count-1)
    {
        left_arr.style.visibility = "visible";
    }
    else
    {
        left_arr.style.visibility = "visible";
        right_arr.style.visibility = "hidden";
    }
    slider.style.left = slide_width + "%";
      console.log(i);
      i++;
});

left_arr.addEventListener("click", function () {
    // console.log(i);
    slide_width = slide_width + 100;
    if (slide_width == 0) {
      left_arr.style.visibility = "hidden";
      right_arr.style.visibility = "visible";
    }
    else{
        right_arr.style.visibility = "visible";
    }
    slider.style.left = slide_width + "%";
  console.log(slide_width);
  count--;
});