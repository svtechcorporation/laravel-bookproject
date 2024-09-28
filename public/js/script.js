



const CART_ID = "BOOKWEBSITE_ALL_ITEMS_STORED_FOR_CART";


setCartCount();

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






function setCookie(name, value) {
    let days = 7;
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Function to get a specific cookie by name
function getCookie(name) {
    let cookieArr = document.cookie.split(';');
    for(let i = 0; i < cookieArr.length; i++) {
        let cookie = cookieArr[i].trim();
        if (cookie.indexOf(name + "=") === 0) {
            return cookie.substring(name.length + 1);
        }
    }
    return ''; // Return null if the cookie isn't found
}

function addToCarts(book_id){
    addToCart(book_id);
}

function addToCart(book_id){
    let storedCookies = getCookie(CART_ID);
    let cartmsg = document.getElementById("cart_message");

    if(!storedCookies.includes(book_id)){
        if(storedCookies.length>0){
            setCookie(CART_ID, storedCookies + ','+book_id);
        } else {
            setCookie(CART_ID, book_id);
        }
        cartmsg.innerHTML = "Item has been added to Cart";
        cartmsg.style.color = 'black';
    } else {
        cartmsg.innerHTML = "Already added to Cart";
        cartmsg.style.color = 'red';
    }
    setCartCount();
    showSlider();
    // alert("Found ids = " + storedCookies + ", item id = "+book_id);
}


function clearCookies(){
    setCookie(CART_ID, '');
    setCartCount();
    location.reload();
}




function showSlider(){
    var cartContainer = document.getElementById('cart_slider_container');
    cartContainer.style.display = 'none';

    const div = document.getElementById('moving_slider');
    div.style.marginLeft = '0px';
    cartContainer.style.display = 'block';

    let position = 0; 
    const divWidth = div.offsetWidth;

    const interval = setInterval(function() {
        position += 5;
        div.style.marginLeft = position + 'px';
        if (position > divWidth) {
            clearInterval(interval); 
            cartContainer.style.display = 'none';
        }
    }, 50);
}



function removeBook(book_id){
    let storedCookies = getCookie(CART_ID);
    var array = storedCookies.split(",");
    const index = array.indexOf(book_id);
    if (index !== -1) {
        array.splice(index, 1);
    }
    storedCookies = array.join(',');
    setCookie(CART_ID, storedCookies);
    setCartCount();
    location.reload();
}

function setCartCount(){
    var cartCount = document.getElementById("cart_count");
    var cartCountSecond = document.getElementById("cart_count_2");
    let storedCookies = getCookie(CART_ID);
    let cartsize = storedCookies.split(",");
    if(storedCookies<1){
        cartCount.textContent = '0';
        cartCountSecond.textContent = '0';
    } else{
        cartCount.textContent = cartsize.length;
        cartCountSecond.textContent = cartsize.length;
    }
}

