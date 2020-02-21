<section class="game_background">
    <div class="jatek" id="jatek">
            <div class="score-board">
                <div id="user-label"><p>You</p></div>
                <div id="computer-label"><p>Computer</p></div>
                <div>
                    <p class="user-score" id= "user-score">0</p><p id="point">:</p><p class="computer-score" id= "computer-score">0</p>
                </div>
            </div>

            <div class="result">
                <p></p>
            </div>
            <div class= "choices">
                
                <div class="choice" id="r">
                    <i class="far fa-hand-rock" ></i>
                </div> 
                <div class="choice" id="p" >
                    <i class="far fa-hand-paper" ></i>
                </div>
                <div class="choice" id="s"> 
                    <i class="far fa-hand-scissors" ></i>
                </div>
                <p id="action-message">Make your move!</p>
                
                <p>Bet: <input type="number" name="bet" id="bet" min="0"></p>
                <input type="hidden" name="winOrNot" id="winOrNot"/>
                <input type="hidden" name="userPick" id="userPick"/>
                <input type="hidden" name="computerPick" id="computerPick"/>
            </div>
    </div>
</section>