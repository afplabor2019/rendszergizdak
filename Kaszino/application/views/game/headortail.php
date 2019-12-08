<section class="container-fluid text-center">    
    <div >
        <div class="row justify-content-center">
            <div id="head" class="block" onclick="chosenHead()">Head</div>
            <div id="tail" class="block" onclick="chosenTail()">Tail</div>
        </div>
        <div>
            <button class="btn-go" onclick="go()">Go</button> 
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