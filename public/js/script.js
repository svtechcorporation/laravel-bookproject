



window.addEventListener("scroll", () =>{
    if(window.scrollY > 100){
        document.getElementById('navigation').classList.add('sticky')
    } else {
        document.getElementById('navigation').classList.remove('sticky')
    }
});