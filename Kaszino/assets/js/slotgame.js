
$(document).ready(function() {
	var doing = false;
	let status = document.getElementById("status")
	var info = true;
	var winOrNot = document.getElementById('winOrNot');
	var bet = document.getElementById('bet');
	

	
$("#Start").on("click",function doSlot(){
	var balance = document.getElementById('user_balance');
	var balanceData = +balance.textContent;
	if(bet.value != null && bet.value > 0 && balanceData >= bet.value){
		if (doing){return null;}
		doing = true;
		var numChanges = randomInt(1,4)*7
		var numeberSlot1 = numChanges+randomInt(1,7)
		var numeberSlot2 = numChanges+2*7+randomInt(1,7)
		var numeberSlot3 = numChanges+4*7+randomInt(1,7)
		

		var i1 = 0;
		var i2 = 0;
		var i3 = 0;
		status.innerHTML = "SPINNING"
		slot1 = setInterval(spin1, 50);
		slot2 = setInterval(spin2, 50);
		slot3 = setInterval(spin3, 50);
	}
	else{
		if(bet.value == null || bet.value == 0){
			status.innerHTML = "PLACE YOUR BET!";
		}
		if(bet.value < 0){
			status.innerHTML = "BET MUST BE POSITIVE!";
		}
		if(balanceData < bet.value){
			status.innerHTML = "YOU HAVE TO LOAD UP BALANCE!";	
		}
	}
		function spin1(){
			i1++;
			if (i1>=numeberSlot1){
				clearInterval(slot1);
				return null;
			}
			slotTile = document.getElementById("slot1");
			if (slotTile.className=="a7"){
				slotTile.className = "a0";
			}
			slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
		}
		function spin2(){
			i2++;
			if (i2>=numeberSlot2){
				clearInterval(slot2);
				return null;
			}
			slotTile = document.getElementById("slot2");
			if (slotTile.className=="a7"){
				slotTile.className = "a0";
			}
			slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
		}
		function spin3(){
			i3++;
			if (i3>=numeberSlot3){
				clearInterval(slot3);
				testWin();
				return null;
			}
			slotTile = document.getElementById("slot3");
			if (slotTile.className=="a7"){
				slotTile.className = "a0";
			}
			
			slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
		}
			

	})
	
	function testWin(){
		var slot1 = document.getElementById("slot1").className
		var slot2 = document.getElementById("slot2").className
		var slot3 = document.getElementById("slot3").className
	
		if (((slot1 == slot2 && slot2 == slot3) ||
			(slot1 == slot2 && slot3 == "a7") ||
			(slot1 == slot3 && slot2 == "a7") ||
			(slot2 == slot3 && slot1 == "a7") ||
			(slot1 == slot2 && slot1 == "a7") ||
			(slot1 == slot3 && slot1 == "a7") ||
			(slot2 == slot3 && slot2 == "a7") ) && !(slot1 == slot2 && slot2 == slot3 && slot1=="a7")){
			status.innerHTML = "YOU WIN!";
			winOrNot.value = 1;
		}else{
			status.innerHTML = "YOU LOSE!";
			winOrNot.value = 0;
		}
		doing = false;

		$.ajax({
			url : '/Kaszino/game/slotmachine_game',
			method : 'post',
			data :{winOrNot : winOrNot.value, bet : bet.value},
			success : function(response){
				console.log(response);
			}
			
		});

		$('#user_balance').load("/Kaszino/game/update_userinfo");
	}
	
	
	function randomInt(min, max){
		return Math.floor((Math.random() * (max-min+1)) + min);
	}
	
 	
 });