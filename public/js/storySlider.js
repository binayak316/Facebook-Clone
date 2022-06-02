// js for story on click event
var button = document.getElementById('left');

button.onclick = function(){
    var container = document.getElementById('box');
    sideScroll(container, 'right',2,130,10);
};

var back = document.getElementById('right');
back.onclick = function(){
    var container = document.getElementById('box');
    sideScroll(container,'left',2,130,10);
};

function sideScroll(element,direction,speed,distance,step){
    scrollAmount = 0;
    var slideTimer = setInterval(function(){
        if(direction =='left'){
            element.scrollLeft -= step;
        }else{
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if(scrollAmount >= distance){
            window.clearInterval(slideTimer);
        }
    },speed);
}