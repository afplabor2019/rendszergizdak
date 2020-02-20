var winOrNot = document.getElementById("winOrNot");
var pickedNumber = document.getElementById("pickedNumber");
var resultNumber = document.getElementById("resultNumber");
var chosenNumber = 0;






$(document).ready(function(){
    $("#dice1").on("click",function(){
        if(chosenNumber != 1) {
            $("#dice1").css("background-color", "blue");
            $("#dice2").css("background-color", "transparent");
            $("#dice3").css("background-color", "transparent");
            $("#dice4").css("background-color", "transparent");
            $("#dice5").css("background-color", "transparent");
            $("#dice6").css("background-color", "transparent");   
            chosenNumber = 1;         
        }
        else {
             
            $("#dice1").css("background-color", "transparent");
            $("#dice2").css("background-color", "transparent");
            $("#dice3").css("background-color", "transparent");
            $("#dice4").css("background-color", "transparent");
            $("#dice5").css("background-color", "transparent");
            $("#dice6").css("background-color", "transparent"); 
            chosenNumber = 0;      
        }  
    });    

    $("#dice2").on("click",function(){
        if(chosenNumber != 2) {
            $("#dice1").css("background-color", "transparent");
            $("#dice2").css("background-color", "blue");
            $("#dice3").css("background-color", "transparent");
            $("#dice4").css("background-color", "transparent");
            $("#dice5").css("background-color", "transparent");
            $("#dice6").css("background-color", "transparent"); 
            chosenNumber = 2
        }
        else {
                 
            $("#dice1").css("background-color", "transparent");
            $("#dice2").css("background-color", "transparent");
            $("#dice3").css("background-color", "transparent");
            $("#dice4").css("background-color", "transparent");
            $("#dice5").css("background-color", "transparent");
            $("#dice6").css("background-color", "transparent");    
            chosenNumber = 0;            
        }  
    });

    $("#dice3").on("click",function(){
        if(chosenNumber != 3) {
            $("#dice1").css("background-color", "transparent");
            $("#dice2").css("background-color", "transparent");
            $("#dice3").css("background-color", "blue");
            $("#dice4").css("background-color", "transparent");
            $("#dice5").css("background-color", "transparent");
            $("#dice6").css("background-color", "transparent");    
            chosenNumber = 3       
        }
        else { 
            $("#dice1").css("background-color", "transparent");
            $("#dice2").css("background-color", "transparent");
            $("#dice3").css("background-color", "transparent");
            $("#dice4").css("background-color", "transparent");
            $("#dice5").css("background-color", "transparent");
            $("#dice6").css("background-color", "transparent");    
            chosenNumber = 0;      
        }  
    });

    $("#dice4").on("click",function(){
        if(chosenNumber !=4) {
            $("#dice1").css("background-color", "transparent");
            $("#dice2").css("background-color", "transparent");
            $("#dice3").css("background-color", "transparent");
            $("#dice4").css("background-color", "blue");
            $("#dice5").css("background-color", "transparent");
            $("#dice6").css("background-color", "transparent"); 
            chosenNumber = 4      
        }
        else {
             
            
            $("#dice1").css("background-color", "transparent");
            $("#dice2").css("background-color", "transparent");
            $("#dice3").css("background-color", "transparent");
            $("#dice4").css("background-color", "transparent");
            $("#dice5").css("background-color", "transparent");
            $("#dice6").css("background-color", "transparent");    
            chosenNumber = 0;     
        }  
    });

    $("#dice5").on("click",function(){
        if(chosenNumber != 5) {
            $("#dice1").css("background-color", "transparent");
            $("#dice2").css("background-color", "transparent");
            $("#dice3").css("background-color", "transparent");
            $("#dice4").css("background-color", "transparent");
            $("#dice5").css("background-color", "blue");
            $("#dice6").css("background-color", "transparent");   
            chosenNumber = 5;   
        }
        else {
            
            $("#dice1").css("background-color", "transparent");
            $("#dice2").css("background-color", "transparent");
            $("#dice3").css("background-color", "transparent");
            $("#dice4").css("background-color", "transparent");
            $("#dice5").css("background-color", "transparent");
            $("#dice6").css("background-color", "transparent");   
            chosenNumber = 0;      
        }  
    });

    $("#dice6").on("click",function(){
        if(chosenNumber != 6) {
            $("#dice1").css("background-color", "transparent");
            $("#dice2").css("background-color", "transparent");
            $("#dice3").css("background-color", "transparent");
            $("#dice4").css("background-color", "transparent");
            $("#dice5").css("background-color", "transparent");    
            $("#dice6").css("background-color", "blue");
            chosenNumber = 6;            
        }
        else {
            $("#dice1").css("background-color", "transparent");
            $("#dice2").css("background-color", "transparent");
            $("#dice3").css("background-color", "transparent");
            $("#dice4").css("background-color", "transparent");
            $("#dice5").css("background-color", "transparent");
            $("#dice6").css("background-color", "transparent");
            chosenNumber = 0;     
        }  
    });

    $('#btn-roll').on("click",function () {
        var status = document.getElementById( 'status' );
        var bet = document.getElementById('bet');
        status.innerHTML = " ";
        var balance = document.getElementById('user_balance');
        var balanceData = +balance.textContent;
        
        if(chosenNumber > 0 && balanceData >= bet.value && bet.value > 0 && bet.value != null )
        {   
            
            var result = Math.floor( Math.random() * 6 ) + 1;
    
            if(result == chosenNumber)
            {
                status.innerHTML = 'You rolled the same number, You won! ' + '(' + 'Result: ' + result + ' Chosen number: ' + chosenNumber + ')';
                winOrNot.value = 1;
            }
            else
            {
                status.innerHTML = 'You lost. Please try again! ' +  '(' + 'Result: ' + result + ' Chosen number: ' + chosenNumber + ')';
                winOrNot.value = 0;
            }         
        }   
        else
        {
            if(chosenNumber ==0 ){
                status.innerHTML += 'Please choose a number!';
            }
            if(bet.value == 0 || bet.value == null){
                status.innerHTML += 'Place your bet!';
            }
            if(balanceData < bet.value){
                status.innerHTML += 'Load up your balance!';
            }
            if(bet.value < 0){
                status.innerHTML += 'Bet must be positive!';
            }
        }

        $.ajax({
            url : '/Kaszino/game/dice_game',
            method : 'post',
            data :{winOrNot : winOrNot.value, bet : bet.value}
        });
        $('#user_balance').load("/Kaszino/game/update_userinfo");
    });
});