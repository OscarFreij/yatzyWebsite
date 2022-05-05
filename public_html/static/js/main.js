var dices = [];


function rolldices(){
    for (let i = 0; i < 6; i++)
    {
        dices[i] = Math.floor(Math.random() * 6) +1;
    
        document.getElementById('dice'+i).src = "static/media/dice_" + dices[i] + ".png";
    }
}

function newPlayer()
{
    $("#players").append($("#templates").children[0].cloneNode(true));
}