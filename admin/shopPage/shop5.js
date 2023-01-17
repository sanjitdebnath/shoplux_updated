let main_img_click = document.querySelector('.main_img_click');
let main_img_file = document.getElementById('main_img_file');
let main_img = document.querySelector('#main_img');


main_img_click.addEventListener('click',()=>
    {
        main_img_file.click();
    })
    main_img_file.addEventListener('change',()=>
    {
        const file = main_img_file.files[0];
        if(file)
        {
            const reader = new FileReader();
            reader.onload = ()=>
            {
                const result = reader.result;
                main_img.src = result;
            }
            reader.readAsDataURL(file);
        }
    });


let sub1_img_click = document.querySelector('.sub1_img_click');
let sub1_img_file = document.getElementById('sub1_img_file');
let sub1_img = document.querySelector('#sub1_img');


sub1_img_click.addEventListener('click',()=>
    {
        sub1_img_file.click();
    })
    sub1_img_file.addEventListener('change',()=>
    {
        const file = sub1_img_file.files[0];
        if(file)
        {
            const reader = new FileReader();
            reader.onload = ()=>
            {
                const result = reader.result;
                sub1_img.src = result;
            }
            reader.readAsDataURL(file);
        }
    });


let sub2_img_click = document.querySelector('.sub2_img_click');
let sub2_img_file = document.getElementById('sub2_img_file');
let sub2_img = document.querySelector('#sub2_img');


sub2_img_click.addEventListener('click',()=>
    {
        sub2_img_file.click();
    })
    sub2_img_file.addEventListener('change',()=>
    {
        const file = sub2_img_file.files[0];
        if(file)
        {
            const reader = new FileReader();
            reader.onload = ()=>
            {
                const result = reader.result;
                sub2_img.src = result;
            }
            reader.readAsDataURL(file);
        }
    });

let sub3_img_click = document.querySelector('.sub3_img_click');
let sub3_img_file = document.getElementById('sub3_img_file');
let sub3_img = document.querySelector('#sub3_img');


sub3_img_click.addEventListener('click',()=>
    {
        sub3_img_file.click();
    })
    sub3_img_file.addEventListener('change',()=>
    {
        const file = sub3_img_file.files[0];
        if(file)
        {
            const reader = new FileReader();
            reader.onload = ()=>
            {
                const result = reader.result;
                sub3_img.src = result;
            }
            reader.readAsDataURL(file);
        }
    });


    // let main_id = document.getElementById('main_id');

    // let edit_btn = main_id.querySelector('.edit button'); 
    // let add_img = main_id.querySelectorAll('.add_img'); 
    // let main_img_edit = main_id.querySelector('.main_img img'); 
    // let sub_img_edit = main_id.querySelectorAll('.sub_img img'); 
    // let input_field = main_id.querySelectorAll('.input_field input'); 
    // let text_area = main_id.getElementById('sel'); 
    // let edit_info = main_id.querySelector('.edit_info'); 
    

    // if(main_img_edit.src=="")
    // {
    //     edit_btn.style.display = "none";   
    // }
    // if(text_area.value=="")
    // {
    //     edit_btn.style.display = "none";   
    // }
    // for (let i = 0; i < sub_img_edit.length; i++) {    
    //     if(sub_img_edit[i].src=="")
    //     {
    //         edit_btn.style.display = "none";
    //         sub_img_edit[i].style.display = "block";
    //     }
    // }
    // for (let i = 0; i < input_field.length-1; i++) {
    //     if(input_field[i].value=="")
    //     {
    //     edit_btn.style.display = "none";
    //     input_field[input_field.length-1].style.display="none";
    //     }
    // }
    // for (let i = 0; i < input_field.length-1; i++) {
    //     if(input_field[i].value!="")
    //     {
    //         input_field[i].setAttribute("readonly",true);
    //     }
    // }
    // if(text_area.value!="")
    // {
    // text_area.setAttribute("readonly",true);
    // }
    
    // edit_btn.addEventListener('click',()=>
    // {
    //     input_field[input_field.length-1].style.display="block";
    //     for (let i = 0; i < add_img.length; i++) {
    //         add_img[i].style.display = "flex";
    //     }
    //     for (let i = 0; i < input_field.length-1; i++) {
    //         input_field[i].removeAttribute("readonly");
    //         input_field[i].style.border = "2px solid rgb(94, 58, 252)";
    //     }
    //     edit_info.style.display = "block";
    //     text_area.removeAttribute("readonly");
    //     text_area.style.border = "2px solid rgb(94, 58, 252)";
    // })
    