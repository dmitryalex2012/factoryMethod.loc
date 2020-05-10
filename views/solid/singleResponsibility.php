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
<!--                <input class="inputSolid1" type="text" pattern="[0-9]{,5}" size="20">-->
<!--                <input type="text" value="" class="inputSolid1">-->
                <input type="text" size="20" id="inputSolid1">
            </div>

            <div class="col-lg-2">
                <p>Select action:</p>
                <select class="select">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
            </div>

            <div class="col-lg-3">
                <p>Input second digit:</p>
                <input type="text" size="20" id="inputSolid2">
            </div>

            <div class="col-lg-2">
                <p>Equal</p>
                <input class="submitSingle" type="button" value="Calculate"></input>
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
        console.log(firstDigit+secondDigit);
        
         $.ajax({
            url: '/solid/execution',
            data: { firstDigit: firstDigit,
                    secondDigit: secondDigit
                    
                  },
            type: 'POST',
            // success: function (purchaseType) {
            success: function (myresult) {
                console.log("Done")
                console.log(myresult);
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

