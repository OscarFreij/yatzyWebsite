<div class="container-fluid col-12">
    <div class="row text-center">
        <div class="container col-6 mt-2">
            <h2>
                Score Board
            </h2>
        </div>
        <div class="container col-6 mt-2">
            <h2>
            Dice Box
            </h2>
            <div class="row col-12 my-3">
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
            <div class="row col-12 mb-3">
                <div class="dice col-12">
                <img id="dice2" src="static/media/dice_3.png" width=128 height=128 style="image-rendering: pixelated" alt="">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                    </div>
                </div>
            </div>
            <div class="row col-12 mb-3">
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
            <div class="row col-12">
            <button onclick="rolldices();" class="btn btn-primary" type="submit">Roll!</button>
            </div>
        </div>
    </div>
</div>