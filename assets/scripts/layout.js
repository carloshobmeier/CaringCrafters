

window.addEventListener("scroll",()=>{
    let y = window.pageYOffset
    if(y > 100){
        document.getElementById("header").classList.add("active");
        document.getElementById("navButtons").classList.add("active");

    }
    else {
        //remove the background property so it comes transparent again (defined in your css)
       document.getElementById("header").classList.remove("active");
       document.getElementById("navButtons").classList.remove("active");
    }
})
