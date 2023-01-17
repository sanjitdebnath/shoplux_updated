let login = document.getElementById('login');
let sign_in = document.getElementById('sign_in');
let back_btn = document.querySelector('.back_btn');
let box_slide = document.querySelector('.box_slide');

login.addEventListener('click',()=>
{
    back_btn.style.left = 0;
    login.style.color = "white";
    sign_in.style.color = "black";
    box_slide.style.left = 0;
    console.log("login");
});
sign_in.addEventListener('click',()=>
{
    back_btn.style.left = 72+"px";
    box_slide.style.left = -100+"%";
    login.style.color = "black";
    sign_in.style.color = "white";
    console.log("sign in");
});


// let sign_btn = document.getElementById("sign_btn");
// let log_btn = document.getElementById("log_btn");
// let show_pop_signin = document.querySelector(".show_pop_signin");
// let show_pop_login = document.querySelector(".show_pop_login");

// sign_btn.addEventListener('click',()=>
// {
//     setTimeout(() => {
//         show_pop_signin.style.display = "none";
//     }, 3000);
// })
// log_btn.addEventListener('click',()=>
// {
//     // setTimeout(() => {
//         // show_pop_login.style.display = "none";
//         console.log('hrkjkghjg')
//         log_btn.preventDefault();
//     // }, 3000);
// })
