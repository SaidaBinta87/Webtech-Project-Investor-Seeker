
// import { setTimeout } from "timers/promises";


function showdate(messagenumber) {

    console.log(1);

    

        const all = document.getElementsByClassName("myconversation");

        
            
            all[messagenumber].classList.add('showdate');

       
}



function hidedate(value)
{


    console.log(2);

    
        const all = document.getElementsByClassName("myconversation");
        
        
            all[value].classList.remove('showdate');




     

}


