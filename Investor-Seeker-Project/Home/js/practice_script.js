gsap.to(".nav",{

    backgroundColor:"#0000008",
    duration:0.5,
    height:"100px",
    

    scrollTrigger:{

    trigger:".nav",
    scroller:"body",
    // markers:true,
    start:"top -10%",
    end:"top -11%",
    scrub:1

    }

})

gsap.to("#main",{

    backgroundColor: "#ffffff",

    scrollTrigger:{
        trigger:"#main",
        scroller:"body",
        start:"top -30%",
        end:"top 80%",
        scrub:3

    }
    
})





const toggleBtn=document.querySelector('.toog_btn');
const toggleIcn=document.querySelector('.toog_btn i');
const dropdownMenu=document.querySelector('.dropdown_menu');

toggleBtn.onclick = function()
{
    dropdownMenu.classList.toggle('open')
    const isOpen=dropdownMenu.classList.contains('open')
    toggleIcn.classList=isOpen
    ?'fa-solid fa-xmark'
    :'fa-solid fa-bars'

    
}

