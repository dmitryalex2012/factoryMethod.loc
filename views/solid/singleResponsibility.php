<?php

/* @var $this yii\web\View */
/* @var $selectorSOLID string */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <h2>"Single responsibility" principle</h2>
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


        <?php
        $calculation = <<<JS
    $('.submitSingle').on('click', function() {
        let firstDigit = Number(document.getElementById('inputSolid1').value);
        let secondDigit = Number(document.getElementById('inputSolid2').value);
        let sign = document.getElementById('select').value;
        let savePointer = 0;
        let selectorSOLID = '<?php echo $selectorSOLID; ?>'; 
        let pointerURL = '/solid/execution_single';
        
        if (selectorSOLID === "open") {
            savePointer = document.getElementById('save').value;
            pointerURL = '/solid/execution_open';
        }

         $.ajax({
            url: pointerURL,
            data: { firstDigit: firstDigit, secondDigit: secondDigit, sign: sign, savePointer: savePointer },
            // dataType: 'json',
            type: 'POST',
            success: function (result) {
                console.log(result);
                $('.labelResult').html(result);   <!-- out new purchase type in table for customer -->
                
                console.log(pointerURL);
                console.log(selectorSOLID);
                
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

