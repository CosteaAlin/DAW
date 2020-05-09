  //slider
const slides=document.querySelector('.slides');
const images=document.querySelectorAll('.slides img');

const prevBtn=document.querySelector('.prevBtn');
const getTheme=document.querySelector('.getTheme');
let index=1;
const size=images[0].clientWidth;
slides.style.transform='translateX('+ (-size *index)+'px)'; 

getTheme.addEventListener('click',()=>{
    if(index>=images.length-1) return;
    slides.style.transition = "transform 1s ease-in-out";
    index++;
    slides.style.transform='translateX('+ (-size *index)+'px)'; 
});

prevBtn.addEventListener('click',()=>{
    if(index<=0) return;
    slides.style.transition = "transform 1s ease-in-out";
    index--;
    slides.style.transform='translateX('+ (-size *index)+'px)'; 
});
slides.addEventListener('transitionend',()=>{
    if(images[index].id==='lastClone')
    {
        slides.style.transition="none";
        index=images.length-2;
        slides.style.transform='translateX('+ (-size *index)+'px)'; 
    }
    if(images[index].id==='firstClone')
    {
        slides.style.transition="none";
        index=images.length-index;  
        slides.style.transform='translateX('+ (-size *index)+'px)'; 
    }
    
});
  //go to
$(document).ready(function(){
    $('.down-icon').click(function(event)
    {
        event.preventDefault();
        $('html, body').animate({scrollTop: $('.history-container').offset().top},1500);
        return false;
    })
})

$(document).ready(function(){
    $('#a-clients').click(function(event)
    {
        event.preventDefault();
        $('html, body').animate({scrollTop: $('.clients').offset().top},1500);
        return false;
    })
})

$(document).ready(function(){
    $('#a-contact').click(function(event)
    {
        event.preventDefault();
        $('html, body').animate({scrollTop: $('.contact-us').offset().top},1500);
        return false;
    })
})
  //responsive navbar
const toggleButton = document.querySelector('.toggle-button');
const navbarItems = document.querySelector('.navbar-items');
toggleButton.addEventListener('click', () => {
    navbarItems.classList.toggle('active') ;
});