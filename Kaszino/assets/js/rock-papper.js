let userScore= 0;
let computerScore= 0;
var winOrNot = document.getElementById("winOrNot");
var userScore_span = document.getElementById("user-score");
var computerScore_span = document.getElementById("computer-score");
var scoreBoard_div = document.querySelector(".score-board");

var rock_div = document.getElementById("r");
var paper_div = document.getElementById("p");
var scissors_div = document.getElementById("s");



$(document).ready(function(){
	var result_p = document.querySelector(".result > p");
	function getComputerChoice() {
		var choices = ['r', 'p', 's'];
		var randomNumber = Math.floor(Math.random() * 3);
		return choices[randomNumber];
	}
	
	function convertToWord(letter) {
		if (letter === "r") return "Rock";
		if (letter === "p") return "Paper";
		return "Scissors";
	}
	
	function win(userChoice, computerChoice){
		userScore++;
		userScore_span.innerHTML = userScore;
		computerScore_span.innerHTML = computerScore;
		winOrNot.value = 1;
		result_p.innerHTML = `${convertToWord(userChoice)} beats ${convertToWord(computerChoice)}. YOU WIN!`;
		document.getElementById(userChoice).classList.add('green-glow');
		setTimeout(function() { document.getElementById(userChoice).classList.remove('green-glow') }, 200);
	}
	
	function lose(userChoice, computerChoice){
		computerScore++;
		userScore_span.innerHTML = userScore;
		computerScore_span.innerHTML = computerScore;
		winOrNot.value = 0;
		result_p.innerHTML = `${convertToWord(userChoice)} loses to ${convertToWord(computerChoice)}. YOU LOST!`;
		document.getElementById(userChoice).classList.add('red-glow');
		setTimeout(function() { document.getElementById(userChoice).classList.remove('red-glow') }, 200);
	}
	
	function draw(userChoice, computerChoice){
		userScore_span.innerHTML = userScore;
		computerScore_span.innerHTML = computerScore;
		winOrNot.value = 2;
		result_p.innerHTML = `${convertToWord(userChoice)} equals ${convertToWord(computerChoice)}. IT'S A DRAW!`;
		document.getElementById(userChoice).classList.add('gray-glow');
		setTimeout(function() { document.getElementById(userChoice).classList.remove('gray-glow') }, 200);
	}
	
	function game(userChoice){
		var computerChoice = getComputerChoice();
		
        var bet = document.getElementById('bet');
		result_p.innerHTML = " ";
        var balance = document.getElementById('user_balance');
		var balanceData = +balance.textContent;
		
		if(balanceData >= bet.value && bet.value > 0 && bet.value != null){
			switch (userChoice + computerChoice) {
				case "rs":
				case "pr":
				case "sp":
				win(userChoice, computerChoice);
				break;
				case "rp":
				case "ps":
				case "sr":
				lose(userChoice, computerChoice);
				break;
				case "rr":
				case "pp":
				case "ss":
				draw(userChoice, computerChoice);
				break;
			}
		}
		else{
			if(bet.value == 0 || bet.value == null){
                result_p.innerHTML += 'Place your bet!';
            }
            if(balanceData < bet.value){
                result_p.innerHTML += 'Load up your balance!';
            }
            if(bet.value < 0){
                result_p.innerHTML += 'Bet must be positive!';
            }
		}

		$.ajax({
            url : '/Kaszino/game/head_or_tail_game',
            method : 'post',
            data :{winOrNot : winOrNot.value, bet : bet.value}
        });
        $('#user_balance').load("/Kaszino/game/update_userinfo");
	}

	$("#r").on("click",function(){
		game("r");
	});

	$("#p").on("click",function(){
		game("p");
	});

	$("#s").on("click",function(){
		game("s");
	});
});

