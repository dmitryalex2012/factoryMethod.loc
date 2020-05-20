<?php

/* @var $this yii\web\View */
/* @var $selectorSOLID string */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <?php if ($selectorSOLID === "open") {
            echo "<h2>\"Open/closed\" principle</h2>";
        } else {
            echo "<h2>\"Single responsibility\" principle</h2>";
        }
        ?>
        <br><br>

        <div class="row">
            <div class="col-lg-3">
                <p>Input first digit:</p>
                <label for="inputSolid1"></label><input type="text" size="15" id="inputSolid1">
            </div>

            <div class="col-lg-2">
                <p>Select action:</p>
                <label>
                    <select id="select">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </label>
            </div>

            <div class="col-lg-3">
                <p>Input second digit:</p>
                <!--                <label>Input second digit:</label>-->
                <label for="inputSolid2"></label><input type="text" size="15" id="inputSolid2">
            </div>

            <div class="col-lg-2">
                <p>Equal</p>
                <input type="button" value="Calculate" class="submitSingle">
            </div>

            <div class="col-lg-1">
                <p>Result:</p>
                <label class="labelResult"></label>
            </div>

            <div class="col-lg-1">
                <?php
                if ($selectorSOLID === "open"):
                    ?>
                    <p>Saving:</p>
                    <label>
                        <select id="save">
                            <option value="File">File</option>
                            <option value="DB">DB</option>
                        </select>
                    </label>
                <?php endif;
                ?>
            </div>
        </div>


        <div class='hidden' data-name='<?= $selectorSOLID ?>'>
        </div>

        <?php
        $calculation = <<<JS
    $('.submitSingle').on('click', function() {
        let firstDigit  = Number(document.getElementById('inputSolid1').value);
        let secondDigit = Number(document.getElementById('inputSolid2').value);
        let sign        = document.getElementById('select').value;
        
        let storagePointer = 0;
        let pointerURL = '/solid/execution_single';
        let selectorSOLID = $('div.hidden').data('name');           <!-- indicates "open/close" or "single respon." -->
                                                                    <!--         principle are chosen in index page -->
        if (selectorSOLID === "open") {                             <!-- Is the "open/close" or "single respon." principle are chosen? -->
            storagePointer = document.getElementById('save').value; <!-- storage place (file or DB) pointer -->
            pointerURL = '/solid/execution_open';
        }
                        // pointerURL = '/solid/execution_open';
                        // storagePointer = 'File';
         $.ajax({
            url: pointerURL,
            data: { firstDigit: firstDigit, secondDigit: secondDigit, sign: sign, storagePointer: storagePointer },
            // dataType: 'json',
            type: 'POST',
            success: function (result) {
                $('.labelResult').html(result);     <!-- out result -->
                console.log(result);
             },
            error: function () {
                console.log ("Failed");
            }
        });
    })
JS;
        $this->registerJs($calculation);
        ?>

    </div>
</div>

