const cookieContainer = document.querySelector(".box");
const cookieButton = document.querySelector("input");


    cookieButton.addEventListener("click", () => {
    console.log("hello");
    cookieContainer.classList.remove("active");
 });

setTimeout(() => {
    cookieContainer.classList.add("active");
  
}, 2000);