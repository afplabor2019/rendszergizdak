<section class=" text-center game_background"> 
    <div>
        <div class="row justify-content-center ">
            <div id="dice1" class="dice"><i class="fas fa-dice-one" ></i></div>
            <div id="dice2" class="dice"><i class="fas fa-dice-two" ></i></div>
            <div id="dice3" class="dice"><i class="fas fa-dice-three" ></i></div>
            <div id="dice4" class="dice"><i class="fas fa-dice-four" ></i></div>
            <div id="dice5" class="dice"><i class="fas fa-dice-five" ></i></div>
            <div id="dice6" class="dice"><i class="fas fa-dice-six" ></i></div>
        </div>
        <div class="betting">   
            <p>Bet: <input type='number' name ='bet' id="bet" min="0"></input></p>
            <input type="hidden" name ='winOrNot' id="winOrNot" value="0"></input>
        </div>       
        <div>
            <button class="btn-roll" id="btn-roll">Roll Dice</button> 
        </div>
        <div>
            <p id="status"></p>
        </div>  
    </div>
</section>