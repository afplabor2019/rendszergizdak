<section class="container-fluid">
    <div class="jatek" id="jatek">
        <form method="POST" action="rock_paper_scissors_game">
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
            <div class= "choices">
                
                <div class="choice" id="r">
                    <button type ="submit" class="far fa-hand-rock"></buton>
                </div> 
                <div class="choice" id="p">
                    <button type ="submit" class="far fa-hand-paper"></button>
                </div>
                <div class="choice" id="s"> 
                    <button type ="submit" class="far fa-hand-scissors"></button>
                </div>
                <p id="action-message">Make your move!</p>
                
                <p>Bet: <input type="number" name="bet"></p>
                <input type="hidden" name="winOrNot" id="winOrNot"/>
                <input type="hidden" name="userPick" id="userPick"/>
                <input type="hidden" name="computerPick" id="computerPick"/>
            </div>
        </form>
    </div>
</section>