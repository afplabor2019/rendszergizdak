<section class="container-fluid">
    <div class="jatek" id="jatek">
            <h1 class="rps">Rock, Papper, Scissors Game</h1>
            <div class="score-board">
                <div id="user-label" ><p> Player </p></div>
                <div id="computer-label" ><p>Computer</p></div>
                <div >
                    <p class="user-score" id = "user-score">0</p>
                    <p>-</p>
                    <p class="computer-score" id = "computer-score">0</p>
                </div>
            </div>

            <div class="result">
                <p></p>
            </div>
            <div class= "choices">
                
                <div class="choice" >
                    <i type ="submit" class="far fa-hand-rock" id="r"></i>
                </div> 
                <div class="choice" >
                    <i type ="submit" class="far fa-hand-paper" id="p"></i>
                </div>
                <div class="choice" > 
                    <i type ="submit" class="far fa-hand-scissors" id="s"></i>
                </div>
                <p id="action-message">Make your move!</p>
                
                <p>Bet: <input type="number" name="bet" id="bet" min="0"></p>
                <input type="hidden" name="winOrNot" id="winOrNot"/>
                <input type="hidden" name="userPick" id="userPick"/>
                <input type="hidden" name="computerPick" id="computerPick"/>
            </div>
    </div>
</section>