var winOrNot = document.getElementById("winOrNot");
var pickedNumber = document.getElementById("pickedNumber");
var resultNumber = document.getElementById("resultNumber");
var chosenNumber = 0;



function rollDice() {
    if(chosenNumber > 0 )
    {   
        var status = document.getElementById( 'status' );
        var result = Math.floor( Math.random() * 6 ) + 1;
        pickedNumber.value = chosenNumber;
        resultNumber.value = result;

        if(result == chosenNumber)
        {
            //status.innerHTML = 'You rolled the same number, You won! ' + '(' + 'Result: ' + result + ' Chosen number: ' + chosenNumber + ')';
            winOrNot.value = 1;
        }
        else
        {
            //status.innerHTML = 'You lost. Please try again! ' +  '(' + 'Result: ' + result + ' Chosen number: ' + chosenNumber + ')';
            winOrNot.value = 0;
        }
    }   
    else
    {
        /*var status = document.getElementById( 'status' );
        status.innerHTML = 'Please choose a number!';*/
    }
}


$(document).ready(function(){
    $("#dice1").on("click",function(){
        if(chosenNumber == 0) {
            $("#dice1").css("background-color", "green");
            chosenNumber = 1;            
        }
        else if(chosenNumber == 1){
            $("#dice1").css("background-color", "white");
            chosenNumber = 0;      
        }  
    });    

    $("#dice2").on("click",function(){
        if(chosenNumber == 0) {
            $("#dice2").css("background-color", "green");
            chosenNumber = 2;            
        }
        else if(chosenNumber == 2) {
            $("#dice2").css("background-color", "white");
            chosenNumber = 0;      
        }  
    });

    $("#dice3").on("click",function(){
        if(chosenNumber == 0) {
            $("#dice3").css("background-color", "green");
            chosenNumber = 3;            
        }
        else if(chosenNumber == 3) {
            $("#dice3").css("background-color", "white");
            chosenNumber = 0;      
        }  
    });

    $("#dice4").on("click",function(){
        if(chosenNumber == 0) {
            $("#dice4").css("background-color", "green");
            chosenNumber = 4;            
        }
        else if(chosenNumber == 4) {
            $("#dice4").css("background-color", "white");
            chosenNumber = 0;      
        }  
    });

    $("#dice5").on("click",function(){
        if(chosenNumber == 0) {
            $("#dice5").css("background-color", "green");
            chosenNumber = 5;            
        }
        else if(chosenNumber == 5) {
            $("#dice5").css("background-color", "white");
            chosenNumber = 0;      
        }  
    });

    $("#dice6").on("click",function(){
        if(chosenNumber == 0) {
            $("#dice6").css("background-color", "green");
            chosenNumber = 6;            
        }
        else if(chosenNumber == 6){
            $("#dice6").css("background-color", "white");
            chosenNumber = 0;      
        }  
    });
});