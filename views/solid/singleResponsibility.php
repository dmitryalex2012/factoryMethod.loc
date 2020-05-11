<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <h2>"Single responsibility" principle</h2>
        <br>

        <br>
        <div class="row">
            <div class="col-lg-3">
                <p>Input first digit:</p>
                <label for="inputSolid1"></label><input type="text" size="20" id="inputSolid1">
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
                <label for="inputSolid2"></label><input type="text" size="20" id="inputSolid2">
            </div>

            <div class="col-lg-2">
                <p>Equal</p>
                <input type="button" value="Calculate" class="submitSingle">
            </div>

            <div class="col-lg-2">
                <p>Result:</p>
                <label class="labelSingle"></label>
            </div>
        </div>


<?php
$calculation = <<<JS
    $('.submitSingle').on('click', function() {
        let firstDigit = Number(document.getElementById('inputSolid1').value);
        let secondDigit = Number(document.getElementById('inputSolid2').value);
        let sign = document.getElementById('select').value;
        
         $.ajax({
            url: '/solid/execution',
            data: { firstDigit: firstDigit, secondDigit: secondDigit, sign: sign },
            // dataType : 'text',
            type: 'POST',
            // success: function (purchaseType) {
            success: function (temp) {
                console.log(temp);
                // $('.purchaseTypeInTable').html("Способ оплаты: "+ purchaseType);   <!-- out new purchase type in table for customer -->
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

