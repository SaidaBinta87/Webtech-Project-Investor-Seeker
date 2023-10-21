
function showinfo(cardnumber) {

    cardnumber--;

        const all = document.getElementsByClassName("profile-card");

        
        
        for (var i = 0; i < all.length; i++) {
            
            if(cardnumber == i){
            
            all[i].classList.add('show');

            }
        }
    
}





function hideinfo(val)
{

    val--;
        const all = document.getElementsByClassName("profile-card");
        
        for (var i = 0; i < all.length; i++) {
            
            if(val == i){
            
            all[i].classList.remove('show');

            }
        }
    // a.classList.remove('show');

     

}