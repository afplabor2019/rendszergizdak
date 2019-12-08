var bet = document.getElementById( 'bet' );
var chosen = 0;
var betCounter = 0;

function go() {
    if(chosen > 0 && betCounter > 0)
    {   
        var status = document.getElementById( 'status' );
        var result = Math.floor( Math.random() * 2 ) + 1;
        betCounter = 0;
        bet.innerHTML = betCounter;

        if(result == chosen && result == 1)
        {
            status.innerHTML = 'Correct, You won! ' + '(' + 'Head!' + ')';
        }
        else if(result == chosen && result == 2)
        {
            status.innerHTML = 'Correct, You won! ' + '(' + 'Tail!' + ')';            
        }
        else if(result != chosen && result == 1)
        {
            status.innerHTML = 'You lost. Please try again! ' + '(' + 'Head!' + ')';
        }
        else if(result != chosen && result == 2)
        {
            status.innerHTML = 'You lost. Please try again! ' + '(' + 'Tail!' + ')';
        } 
    }
    else if(betCounter == 0)
    {
        var status = document.getElementById( 'status' );
        status.innerHTML = 'Please place your bets!'
    }
    else if(chosen == 0)
    {
        var status = document.getElementById( 'status' );
        status.innerHTML = 'Please choose!';
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
    $("#head").click(function(){
        if(chosen == 0) {
            $("#head").css("background-color", "green");
            chosen = 1;            
        }
        else if(chosen == 1){
            $("#head").css("background-color", "white");
            chosen = 0;      
        }  
    });    

    $("#tail").click(function(){
        if(chosen == 0) {
            $("#tail").css("background-color", "green");
            chosen = 2;            
        }
        else if(chosen == 2) {
            $("#tail").css("background-color", "white");
            chosen = 0;      
        }  
    });
});