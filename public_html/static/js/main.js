function rolldices(){
    for (let i = 0; i < 5; i++)
    {
        var dices = [];
        dices[i] = Math.floor(Math.random() * 6) +1;
        
        if (document.getElementById('dice'+i).parentElement.getElementsByTagName("input")[0].checked)
        {
            document.getElementById('dice'+i).src = "static/media/dice_" + dices[i] + ".png";
        }
    }
}

function newPlayer()
{
    $("#players").append($("#templates").children()[0].cloneNode(true));
}

function calcScores()
{
    var players = $("#players").children();
    
    for (let i = 0; i < players.length; i++) {
        const player = players[i];
        var totalScore = 0;
        for (let j = 1; j < player.getElementsByTagName("input").length; j++) {
            const element = player.getElementsByTagName("input")[j];
            totalScore += parseInt(element.value);
        }
        player.children[0].children[player.children[0].children.length-1].innerText = totalScore;
    }
}