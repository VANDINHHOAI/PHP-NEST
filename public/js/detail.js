var inputField = document.getElementById('inputField');
  var decreaseBtn = document.getElementById('decreaseBtn');
  var increaseBtn = document.getElementById('increaseBtn');

  decreaseBtn.addEventListener('click', function() {
    var currentValue = parseInt(inputField.value);
    if (!isNaN(currentValue)) {
      inputField.value = currentValue - 1;
    }
  });

  increaseBtn.addEventListener('click', function() {
    var currentValue = parseInt(inputField.value);
    
    if (!isNaN(currentValue)) {
      inputField.value = currentValue + 1;
    }
  });


  function openTab(tabName) {
    var i, tabContent, tabBtns;
    
    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }
    
    tabBtns = document.getElementsByClassName("tab-btn");
    for (i = 0; i < tabBtns.length; i++) {
        tabBtns[i].classList.remove("active");
    }
    
    document.getElementById(tabName).style.display = "block";
    event.currentTarget.classList.add("active");
}



/* button scroll to top design */
let toTop = document.getElementById('toTop');
toTop.style.display = 'none';
window.addEventListener('scroll', () => {
    if(this.scrollY > 300){
        toTop.style.display = 'block';
    }else{
        toTop.style.display = 'none';
    }
})
toTop.onclick = function(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
}