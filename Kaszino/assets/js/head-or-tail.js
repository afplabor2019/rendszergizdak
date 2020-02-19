var winOrNot = document.getElementById('winOrNot');
var userPick = document.getElementById('userPick');
var finalResult = document.getElementById('result');
var chosen = 0;


function go() {
    if(chosen > 0 )
    {   
       
        var result = Math.floor( Math.random() * 2 ) + 1;

        if(result == chosen && result == 1)
        {
            winOrNot.value = 1;
            userPick.value = "Head";
            finalResult.value = "Head";
            //status.innerHTML = 'Correct, You won! ' + '(' + 'Head!' + ')';
        }
        else if(result == chosen && result == 2)
        {
            winOrNot.value = 1;
            userPick.value = "Tail";
            finalResult.value = "Tail"
            //status.innerHTML = 'Correct, You won! ' + '(' + 'Tail!' + ')';            
        }
        else if(result != chosen && result == 1)
        {
            winOrNot.value = 0;
            userPick.value = "Tail";
            finalResult.value = "Head"
            //status.innerHTML = 'You lost. Please try again! ' + '(' + 'Head!' + ')';
        }
        else if(result != chosen && result == 2)
        {
            winOrNot.value = 0;
            userPick.value = "Head";
            finalResult.value = "Tail";
            //status.innerHTML = 'You lost. Please try again! ' + '(' + 'Tail!' + ')';
        } 
    }
    /*else if(betCounter == 0)
    {
        var status = document.getElementById( 'status' );
        status.innerHTML = 'Please place your bets!'
    }
    else if(chosen == 0)
    {
        var status = document.getElementById( 'status' );
        status.innerHTML = 'Please choose!';
    }*/
}



$(document).ready(function(){
    $("#head").on("click",function(){
        if(chosen != 1) {
            $("#head").css("background-color", "green");
            $("#tail").css("background-color", "white");
            chosen = 1;            
        }
        else if(chosen == 1){
            $("#head").css("background-color", "white");
            chosen = 0;      
        }  
    });    

    $("#tail").on("click",function(){
        if(chosen != 2) {
            $("#tail").css("background-color", "green");
            $("#head").css("background-color", "white");
            chosen = 2;            
        }
        else if(chosen == 2) {
            $("#tail").css("background-color", "white");
            chosen = 0;      
        }  
    });
});