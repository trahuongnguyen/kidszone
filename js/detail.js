var y = document.getElementsByClassName("myaudio");
var x = [];
for (var i = 0; i < y.length; i++) {
    x[i] = document.getElementById(i); 
}
function playAudio(i){
    x[i].play();
} 