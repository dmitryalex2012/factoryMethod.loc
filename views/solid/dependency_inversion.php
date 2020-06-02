<?php

/* @var $this yii\web\View */
/* @var $temp array */

$this->title = 'My Yii Application';
?>

<!-- ****************************************** -->
<!-- ********* THIS PAGE IS ADAPTIVE. ********* -->
<!-- ****************************************** -->

<div class="site-index">

    <div class="jumbotron">

        <h2>"Dependency inversion" principle</h2>

        <h3>Choose food:</h3>

        <div class="row">

            <?php
            for ($i = 0; $i <= 1; $i++):
                ?>

                <div class="col-lg-6 col-sm-6">
                    <div class="buttonGroupWidth">
                        <?php
                        switch ($i) {
                            case 0:
                                echo "<input type=\"button\" value=\"from home\" class=\"btn btn-success btn-lg btn-block\">";
                                break;
                            case 1:
                                echo "<input type=\"button\" value=\"from restaurant\" class=\"btn btn-success btn-lg btn-block\">";
                                break;
                        }
                        ?>
                    </div>
                </div>

            <?php
            endfor;
            ?>

        </div>

        <div class="messageStyle row">
            <div class="messageWord col-6">
                <label>Message:</label>
            </div>

            <div class="messageContainer col-6">
                <label class="messageLabel"></label>
            </div>
        </div>


        <?php
        $ISP = <<<JS
        $('.btn').on('click', function (){
            let pressedButton = this.value;
            
            $.ajax({
            url: '/dependency_inversion/food',
            data: {transformType: pressedButton},
            type: 'POST',
            success: function(transformerParameters) {                  <!-- receive "transformerParameters" string -->
                console.log(transformerParameters);
                // $(".messageLabel").html(transformerParameters);         <!-- output transformer parameter-->
            },
            error: function() {
              console.log("Failed");
            }
        });
    })
JS;
        $this->registerJs($ISP);
        ?>

    </div>
</div>

