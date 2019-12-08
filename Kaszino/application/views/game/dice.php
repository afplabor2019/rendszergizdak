<section class="container-fluid text-center">    
    <div >
        <div class="row">
            <div id="dice1" class="dice"><i class="fas fa-dice-one" onclick="chosenOne()"></i></div>
            <div id="dice2" class="dice"><i class="fas fa-dice-two" onclick="chosenTwo()"></i></div>
            <div id="dice3" class="dice"><i class="fas fa-dice-three" onclick="chosenThree()"></i></div>
            <div id="dice4" class="dice"><i class="fas fa-dice-four" onclick="chosenFour()"></i></div>
            <div id="dice5" class="dice"><i class="fas fa-dice-five" onclick="chosenFive()"></i></div>
            <div id="dice6" class="dice"><i class="fas fa-dice-six" onclick="chosenSix()"></i></div>
        </div>
        <div>
            <button class="btn-roll" onclick="rollDice()">Roll Dice</button> 
        </div>
        <div>   
            <button class="btn-5" onclick="bet_five()">Bet 5</button>
            <button class="btn-10" onclick="bet_ten()">Bet 10</button>
            <button class="btn-20" onclick="bet_twenty()">Bet 20</button>
            <button class="btn-50" onclick="bet_fifty()">Bet 50</button>
            <button class="btn-100" onclick="bet_hundred()">Bet 100</button>
            <button class="btn-200" onclick="bet_twohundred()">Bet 200</button>
            <h2 id="bet">0</h2>
        </div>
        <div>
            <h2 id="status"></h2>
        </div>
    </div>    
</section>