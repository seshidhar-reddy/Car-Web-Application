const slide = document.querySelector('.slide');
const images = document.querySelectorAll('.slide img');
const prev = document.querySelector('#Prev');
const next = document.querySelector('#Next');
let counter =1;
const size=images[0].clientWidth;
slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
next.addEventListener('click', ()=>{
    if(counter>=images.length-1)return;
    slide.style.transition= "transform 0.4s ease-in-out";
    counter++;
    slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});
prev.addEventListener('click', ()=>{
    if(counter<=0)return;
    slide.style.transition= "transform 0.4s ease-in-out";
    counter--;
    slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});
slide.addEventListener('transitionend',()=>{
    if (images[counter].id === 'lastclone'){
        slide.style.transition="none";
        counter=images.length-2;
        slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
    if(images[counter].id === 'firstclone'){
        slide.style.transition="none";
        counter=images.length-counter;
        slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
});