
let button = document.getElementsByClassName('up-Button')[0];
let para = document.getElementsByClassName("welcome-msg");
button.addEventListener('click',function(e){
    window.scroll({top:0 ,behavior: "smooth"});
    
})

