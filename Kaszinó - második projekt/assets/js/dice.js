window.addEventListener( 'DOMContentLoaded', function () {
	
    var buttonRollDice = document.querySelector( '.btn-roll' );

function rollDice () {

    var dice1 = document.getElementById( 'dice1' );
    var dice2 = document.getElementById( 'dice2' );
    var dice3 = document.getElementById( 'dice3' );
    var dice4 = document.getElementById( 'dice4' );
    var dice5 = document.getElementById( 'dice5' );
    var dice6 = document.getElementById( 'dice6' );
    var status = document.getElementById( 'status' );

    var result = Math.floor( Math.random() * 6 ) + 1;
    var bid_count = 0;

    if (result == 1)
    {

    }
    else if (result == 2)
    {

    }
    else if (result == 3)
    {
        
    }
    else if (result == 4)
    {
        
    }
    else if (result == 5)
    {
        
    }
    else if (result == 6)
    {
        
    }

    status.innerHTML = 'You rolled: ' + result;    
}

buttonRollDice.addEventListener( 'click', rollDice, false );

}, false);