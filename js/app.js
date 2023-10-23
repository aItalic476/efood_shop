

let navGroup = document.querySelector('.nav__group'),
    navButton = document.querySelector('.nav__btn')
    

navButton.addEventListener("click",()=>{
    navButton.classList.toggle("enabled")
    navGroup.classList.toggle("active")
})


let date = document.querySelector('#date')
date.innerHTML = new Date().getFullYear()

let scrollPos = window.scrollY,
    headerHeight = document.querySelector('.header').clientHeight,
    arrowUp = document.querySelector('#arrow')

arrowUp.addEventListener("click",()=>{
    window.scrollTo({top:0,behavior:'smooth'})
})
window.addEventListener("scroll",()=>{
    scrollPos = window.scrollY
    
    if(scrollPos>headerHeight){
        arrowUp.classList.add("fixed")
        navButton.classList.remove("enabled")
        navGroup.classList.remove("active")
    }else{
        arrowUp.classList.remove("fixed")
    }
})

