








function showNavigation(res){
    if(res === 1){
        document.getElementById("sm-links").style.display = "block";
        document.getElementById("sm-nav-show").style.display = "none";
        document.getElementById("sm-nav-hide").style.display = "block";
    } else {
        document.getElementById("sm-links").style.display = "none";
        document.getElementById("sm-nav-show").style.display = "block";
        document.getElementById("sm-nav-hide").style.display = "none";
    }
}


window.addEventListener("scroll", () =>{
    if(window.scrollY > 100){
        document.getElementById('navigation').classList.add('sticky')
    } else {
        document.getElementById('navigation').classList.remove('sticky')
    }
});


document.getElementById('fileInput').addEventListener('change', function() {
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(event) {
            var imagePreview = document.getElementById('imagePreview');
            imagePreview.src = event.target.result;
            imagePreview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});



