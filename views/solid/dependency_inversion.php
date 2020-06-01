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

        <h3>Select transformer type:</h3>

        <div class="row">

            <?php
            for ($i = 0; $i <= 3; $i++):
                ?>

                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="makeWidth">
                        <?php
                        switch ($i) {
                            case 0:
                                echo "<input type=\"button\" value=\"Plane transformer\" class=\"btn btn-success btn-lg btn-block\" id='1'>";
                                break;
                            case 1:
                                echo "<input type=\"button\" value=\"Car transformer\" class=\"btn btn-success btn-lg btn-block\" id='2'>";
                                break;
                            case 2:
                                echo "<input type=\"button\" value=\"Ship transformer\" class=\"btn btn-success btn-lg btn-block\" id='3'>";
                                break;
                            case 3:
                                echo "<input type=\"button\" value=\"Super transformer\" class=\"btn btn-success btn-lg btn-block\" id='4'>";
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
            <div class="messageWord col-4">
                <label>Message:</label>
            </div>

            <div class="messageContainer col-8">
                <label class="messageLabel"></label>
            </div>
        </div>


        <?php
        $ISP = <<<JS
        $('.btn').on('click', function (){
            let pressedButton = this.value;
            
            $.ajax({
            url: '/isp/parameters',
            data: {transformType: pressedButton},
            type: 'POST',
            success: function(transformerParameters) {                  <!-- receive "transformerParameters" string -->
                console.log(transformerParameters);
                $(".messageLabel").html(transformerParameters);         <!-- output transformer parameter-->
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

