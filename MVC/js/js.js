let size = document.getElementsByClassName("slide")[0].clientWidth;
let moveSlide = document.getElementsByClassName("move-slide")[0];
let img = moveSlide.getElementsByTagName("img");
let max = size * img.length;
max -= size;
let move = 0;

function next() {

    move < max ? move += size : move = 0;
    moveSlide.style.marginLeft = '-' + move + 'px';
}
function back() {

    move === 0 ? move = max : move -= size;
    moveSlide.style.marginLeft = '-' + move + 'px';
}

setInterval(function(){
    next();
}, 3000)
