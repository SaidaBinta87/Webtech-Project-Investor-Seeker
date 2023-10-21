let toggle=document.querySelector('.toggle');
let navbar=document.querySelector('.navbar');
let main=document.querySelector('.main');

toggle.onclick=function(){
    navbar.classList.toggle('active') 
    main.classList.toggle('active')
}

let list=document.querySelectorAll('.navbar li');
function actvelink(){

    list.forEach((item)=>
    item.classList.remove('hovered'));
    this.classList.add('hovered');
}

list.forEach((item)=>
item.addEventListener('mouseover',activelink));


// not working code sample 
////////////////////////////////////////////////////////////////////

