var bet = document.getElementById( 'bet' );
var chosenNumber = 0;
var betCounter = 0;

function rollDice() {
    if(chosenNumber > 0 && betCounter > 0)
    {   
        var status = document.getElementById( 'status' );
        var result = Math.floor( Math.random() * 6 ) + 1;
        betCounter = 0;
        bet.innerHTML = betCounter;

        if(result == chosenNumber)
        {
            status.innerHTML = 'You rolled the same number, You won! ' + '(' + 'Result: ' + result + ' Chosen number: ' + chosenNumber + ')';
        }
        else
        {
            status.innerHTML = 'You lost. Please try again! ' +  '(' + 'Result: ' + result + ' Chosen number: ' + chosenNumber + ')';
        }
    }
    else if(betCounter == 0)
    {
        var status = document.getElementById( 'status' );
        status.innerHTML = 'Please place your bets!'
    }
    else if(chosenNumber == 0)
    {
        var status = document.getElementById( 'status' );
        status.innerHTML = 'Please choose a number!';
    }
}

function bet_five() {
    betCounter += 5;
    bet.innerHTML = betCounter;
}

function bet_ten() {
    betCounter += 10;
    bet.innerHTML = betCounter;
}

function bet_twenty() {
    betCounter += 20;
    bet.innerHTML = betCounter;
}

function bet_fifty() {
    betCounter += 50;
    bet.innerHTML = betCounter;
}

function bet_hundred() {
    betCounter += 100;
    bet.innerHTML = betCounter;
}

function bet_twohundred() {
    betCounter += 200;
    bet.innerHTML = betCounter;
}

$(document).ready(function(){
    $("#dice1").click(function(){
        if(chosenNumber == 0) {
            $("#dice1").css("background-color", "green");
            chosenNumber = 1;            
        }
        else if(chosenNumber == 1){
            $("#dice1").css("background-color", "white");
            chosenNumber = 0;      
        }  
    });    

    $("#dice2").click(function(){
        if(chosenNumber == 0) {
            $("#dice2").css("background-color", "green");
            chosenNumber = 2;            
        }
        else if(chosenNumber == 2) {
            $("#dice2").css("background-color", "white");
            chosenNumber = 0;      
        }  
    });

    $("#dice3").click(function(){
        if(chosenNumber == 0) {
            $("#dice3").css("background-color", "green");
            chosenNumber = 3;            
        }
        else if(chosenNumber == 3) {
            $("#dice3").css("background-color", "white");
            chosenNumber = 0;      
        }  
    });

    $("#dice4").click(function(){
        if(chosenNumber == 0) {
            $("#dice4").css("background-color", "green");
            chosenNumber = 4;            
        }
        else if(chosenNumber == 4) {
            $("#dice4").css("background-color", "white");
            chosenNumber = 0;      
        }  
    });

    $("#dice5").click(function(){
        if(chosenNumber == 0) {
            $("#dice5").css("background-color", "green");
            chosenNumber = 5;            
        }
        else if(chosenNumber == 5) {
            $("#dice5").css("background-color", "white");
            chosenNumber = 0;      
        }  
    });

    $("#dice6").click(function(){
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