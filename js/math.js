function getRandNumber() {
    return Math.floor(Math.random() * 10);
}
var number1 = document.getElementById("a").innerHTML = getRandNumber();
var number2 = document.getElementById("b").innerHTML = getRandNumber();
var resultSum = parseInt(number1) + parseInt(number2);
if(number1 >= number2){
    var number3 = document.getElementById("g").innerHTML = number1;
    var number4 = document.getElementById("h").innerHTML = number2;
}else{
    var number3 = document.getElementById("g").innerHTML = number2;
    var number4 = document.getElementById("h").innerHTML = number1;
}
var resultMinus = parseInt(number3) - parseInt(number4);
function sosanh() {
    var submitSum = document.getElementById("d").value;
    var submitMinus = document.getElementById("e").value;
    if (resultSum == submitSum && resultMinus == submitMinus) {
        alert("Correct");
    }else if (resultSum == submitSum && resultMinus != submitMinus){
        alert("The second question is wrong!");
    }
    else if (resultSum != submitSum && resultMinus == submitMinus){
        alert("The first question is wrong!");
    }  
    else {
        alert("You lose!!!");
    }    
}