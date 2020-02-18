<section class="container-fluid text-center">    
   <form method="POST" action = "dice_game">
        <div class="row justify-content-center">
            <div id="dice1" class="dice"><i class="fas fa-dice-one" ></i></div>
            <div id="dice2" class="dice"><i class="fas fa-dice-two" ></i></div>
            <div id="dice3" class="dice"><i class="fas fa-dice-three" ></i></div>
            <div id="dice4" class="dice"><i class="fas fa-dice-four" ></i></div>
            <div id="dice5" class="dice"><i class="fas fa-dice-five" ></i></div>
            <div id="dice6" class="dice"><i class="fas fa-dice-six" ></i></div>
        </div>
        <div>   
            <input type='number' name ='bet' id="bet"></input>
            <input type="hidden" name ='winOrNot' id="winOrNot" value="0"></input>
            <input type="hidden" name ="pickedNumber" id="pickedNumber" value="0"/>
            <input type="hidden" name ="resultNumber" id="resultNumber"/>
        </div>       
        <div>
            <button class="btn-roll" onclick="rollDice()">Roll Dice</button> 
        </div>
        <div>
            <p>
                <?php 
                if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                }
                ?>
            </p>
            <p>
                <?php 
                if (isset($_SESSION['result']) && !empty($_SESSION['result'])) {
                    echo $_SESSION['result'];
                    unset($_SESSION['result']);}
                ?>
            </p>
        </div>
    </form>
</section>