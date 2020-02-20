
$(document).ready(function(){
    var winOrNot = document.getElementById('winOrNot');
    var chosen = 0;

    $("#head").on("click",function(){
        if(chosen != 1) {
            $("#head").css("background-color", "blue");
            $("#tail").css("background-color", "transparent");
            chosen = 1;            
        }
        else if(chosen == 1){
            $("#head").css("background-color", "transparent");
            chosen = 0;      
        }  
    });    

    $("#tail").on("click",function(){
        if(chosen != 2) {
            $("#tail").css("background-color", "blue");
            $("#head").css("background-color", "transparent");
            chosen = 2;            
        }
        else if(chosen == 2) {
            $("#tail").css("background-color", "transparent");
            chosen = 0;      
        }  
    });

    $('#btn-go').on("click",function() {
        var status = document.getElementById( 'status' );
        var bet = document.getElementById('bet');
        status.innerHTML = " ";
        var balance = document.getElementById('user_balance');
        var balanceData = +balance.textContent;

        if(chosen != 0 && balanceData >= bet.value && bet.value > 0 && bet.value != null)
        {   
           
            var result = Math.floor( Math.random() * 2 ) + 1;
    
            if(result == chosen && result == 1)
            {
                winOrNot.value = 1;
                status.innerHTML = 'Correct, You won! ' + '(' + 'Head!' + ')';
            }
            else if(result == chosen && result == 2)
            {
                winOrNot.value = 1;
                status.innerHTML = 'Correct, You won! ' + '(' + 'Tail!' + ')';            
            }
            else if(result != chosen && result == 1)
            {
                winOrNot.value = 0;
                status.innerHTML = 'You lost. Please try again! ' + '(' + 'Head!' + ')';
            }
            else if(result != chosen && result == 2)
            {
                winOrNot.value = 0;
                status.innerHTML = 'You lost. Please try again! ' + '(' + 'Tail!' + ')';
            } 
        }
        else 
        {
            if(chosen ==0 ){
                status.innerHTML += 'Please choose!';
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
            url : '/Kaszino/game/head_or_tail_game',
            method : 'post',
            data :{winOrNot : winOrNot.value, bet : bet.value}
        });
        $('#user_balance').load("/Kaszino/game/update_userinfo");
    });
});