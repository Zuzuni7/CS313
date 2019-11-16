function getRandomInt(min, max){
    return Math.floor(Math.random() * (max - min + 1)) + min;
    //Math.floor does...
}

function getCPUChoice() {
    var num = getRandomInt(0,2);

    switch (num) {
        case 0:
            return "rock";
        case 1: 
            return "paper";
        default:
            return "scissors";
    }
}

function getWinner(player, cpu, username){
    var winner;
    if(player == cpu) {
        winner = "tie";
    }
    else if ((player == "rock" && cpu == "scissors") 
            || (player == "scissors" && cpu == "paper") 
            || (player == "paper" && cpu == "rock")){
                winner = username;
            }
            else {
                winner = "cpu";
            }
            return winner;
}

function playGame(req,res) {
    console.log("Playin the game from over 'ere m'lord!");
    var player = req.query.player_choice;
    var username = req.query.username;
    // create AI
    var cpu = getCPUChoice();
    console.log("The CPU choice: " + cpu);
    console.log("The player choice: " + player);

    var winner = getWinner(player, cpu, username);
    var stuff = {player: player, cpu: cpu, winner: winner};
    res.render('results', stuff);
}

module.exports = {playGame: playGame};