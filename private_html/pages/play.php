<div class="container-fluid col-12">
    <div class="row text-center">
        <div class="container col-12 col-md-5 mt-2">
            <h2>
                Score Board
            </h2>
            <div class="row">
                <div id="score-legend" class="col-5 d-flex justify-content-start text-start">
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item fw-bolder"><span>Namn</span></li>
                        <li class="list-group-item fw-bold">Övre sektion</li>
                        <li class="list-group-item">Ettor: </li>
                        <li class="list-group-item">Tvåor: </li>
                        <li class="list-group-item">Treor: </li>
                        <li class="list-group-item">Fyror: </li>
                        <li class="list-group-item">Femmor: </li>
                        <li class="list-group-item">Sexor: </li>
                        <li class="list-group-item fw-bold">Nedre sektion</li>
                        <li class="list-group-item">Ett par: </li>
                        <li class="list-group-item">Två par: </li>
                        <li class="list-group-item">Tre lika: </li>
                        <li class="list-group-item">Fyra lika: </li>
                        <li class="list-group-item">Small Straight: </li>
                        <li class="list-group-item">Large Straight: </li>
                        <li class="list-group-item">Fullt Hus: </li>
                        <li class="list-group-item">Chans: </li>
                        <li class="list-group-item">Yatzy: </li>
                        <li class="list-group-item fw-bolder">Total: </li>
                    </ul>
                </div>
                <div id="players" class="container col-7 d-flex" style="overflow-x: auto;">

                </div>
            </div>
            <div class="row container col-10 mx-auto btn-group" role="group">
                <button onclick="newPlayer();" class="btn btn-warning col-6" type="submit">Add player!</button>
                <button onclick="calcScores();" class="btn btn-success col-6" type="submit">Calculate Score!</button>
            </div>
        </div>
        <div class="container col-12 col-md-5 mt-2 mx-auto" style="height: 100%">
            <h2>
            Dice Box
            </h2>
            <div class="row col-12 my-3 mx-auto">
                <div class="dice col-6">
                    <img id="dice0" src="static/media/dice_1.png" width=128 height=128 style="image-rendering: pixelated" alt="">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                    </div>
                </div>
                <div class="dice col-6">
                <img id="dice1" src="static/media/dice_2.png" width=128 height=128 style="image-rendering: pixelated" alt="">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                    </div>
                </div>
            </div>
            <div class="row col-12 mb-3 mx-auto">
                <div class="dice col-12">
                <img id="dice2" src="static/media/dice_3.png" width=128 height=128 style="image-rendering: pixelated" alt="">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                    </div>
                </div>
            </div>
            <div class="row col-12 mb-3 mx-auto">
                <div class="dice col-6">
                <img id="dice3" src="static/media/dice_4.png" width=128 height=128 style="image-rendering: pixelated" alt="">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                    </div>
                </div>
                <div class="dice col-6">
                <img id="dice4" src="static/media/dice_5.png" width=128 height=128 style="image-rendering: pixelated" alt="">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                    </div>
                </div>
            </div>
            <div class="row col-10 mx-auto">
            <button onclick="rolldices();" class="btn btn-primary" type="submit">Roll!</button>
            </div>
        </div>
    </div>
</div>
<div id="templates" style="display: none;">
<?php
include_once "../private_html/templates/newUser.php";
?>
</div>