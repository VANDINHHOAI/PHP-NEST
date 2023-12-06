// Section Slide
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slide");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 10000);
}




// Shopping cart and Checkout
// OPEN & CLOSE CART
const cartIcon = document.querySelector('#cart-icon');
const cart = document.querySelector('.cart');
const closeCart = document.querySelector("#cart-close");

if(closeCart) {
    closeCart.addEventListener("click", () => {
        cart.classList.remove('cart-active');
    });
}

if(cartIcon) {
    cartIcon.addEventListener('click', () => {
        cart.classList.add("cart-active");
    })
};


// Modal
const showMenu = document.querySelector('.js-menu-btn');
const modalMenu = document.querySelector('.js-modal-menu');
const modalClose = document.querySelector('.js-modal-close');
const modalContainer = document.querySelector('.js-modal-container');

function openMenu () {
    modalMenu.classList.add('open')
}

function closeMenu () {
    modalMenu.classList.remove('open')
}

showMenu.addEventListener('click', openMenu);

modalClose.addEventListener('click', closeMenu);

modalMenu.addEventListener('click', closeMenu);

modalContainer.addEventListener('click', function(event) {
    event.stopPropagation()
})



/* button scroll to top design */
let toTop = document.getElementById('toTop');
toTop.style.display = 'none';
window.addEventListener('scroll', () => {
    if(this.scrollY > 500){
        toTop.style.display = 'block';
    }else{
        toTop.style.display = 'none';
    }
})
toTop.onclick = function(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

/* Add cart */

