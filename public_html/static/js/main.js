var dices = [];


function rolldices(){
    for (let i = 0; i < 6; i++)
    {
        dices[i] = Math.floor(Math.random() * 6) +1;
    
        document.getElementById('dice'+i).src = "../media/dice_" + dices[i] + ".png";
    }
}