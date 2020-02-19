<section class="container-fluid text-center"> 
    <form method="POST" action="head_or_tail_game">
        <div >
            <div class="row justify-content-center">
                <div id="head" class="block" onclick="chosenHead()">Head</div>
                <div id="tail" class="block" onclick="chosenTail()">Tail</div>
            </div>
            
            <div>   
                
                <h2 id="bet"><input type="number" name="bet" id="bet"></h2>
                <input type="hidden" name="winOrNot" id="winOrNot">
                <input type="hidden" name="result" id="result">
                <input type="hidden" name="userPick" id="userPick">
            </div>
            <div>
                <button class="btn-go" onclick="go()">Go</button> 
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
        </div>  
    </form>  
</section>