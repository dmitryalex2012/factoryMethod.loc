<?php

/* @var $this yii\web\View */
/* @var $temp array */

$this->title = 'My Yii Application';
?>

<!-- ***************************************************************************************************** -->
<!-- ********* THIS PAGE IS NOT ADAPTIVE. BAD DISPLAYING INFORMATION FOR RESOLUTION < 620 PIXELS ********* -->
<!-- ***************************************************************************************************** -->

<div class="site-index">

    <div class="jumbotron">

        <h2>"Barbara Liskov" principle</h2>

        <div class="row">
            <div class="col-sm-3">
            </div>

            <div class="col-sm-9">
                <h3>Select bird for take information about it.</h3>
            </div>
        </div>

        <div class="row">

            <?php
            for ($i = 0; $i <= 3; $i++):
                ?>

                <div class="col-sm-3">
                    <div class="makeWidth">
                        <?php
                        switch ($i) {
                            case 1:
                                echo "<input type=\"button\" value=\"Duck\" class=\"btn btn-success btn-lg btn-block\" id='1'>";
                                break;
                            case 2:
                                echo "<input type=\"button\" value=\"Penguin\" class=\"btn btn-success btn-lg btn-block\" id='2'>";
                                break;
                            case 3:
                                echo "<input type=\"button\" value=\"Eagle\" class=\"btn btn-success btn-lg btn-block\" id='3'>";
                                break;
                        }
                        ?>
                    </div>
                </div>

            <?php
            endfor;
            ?>

        </div>


        <div class="flySpeed row">

            <div class="col-sm-3">
                <label>Fly speed:</label>
            </div>

            <div class="parameter col-sm-3" id="DuckFlySpeed">
                <label></label>
            </div>

            <div class="parameter col-sm-3" id="PenguinFlySpeed">
                <label></label>
            </div>

            <div class="parameter col-sm-3" id="EagleFlySpeed">
                <label></label>
            </div>

        </div>


        <div class="swimSpeed row">

            <div class="col-sm-3">
                <label>Swim speed:</label>
            </div>

            <div class="parameter col-sm-3" id="DuckSwimSpeed">
                <label></label>
            </div>

            <div class="parameter col-sm-3" id="PenguinSwimSpeed">
                <label class="forDel"></label>
            </div>

            <div class="parameter col-sm-3" id="EagleSwimSpeed">
                <label></label>
            </div>

        </div>
        <label class="LiskovMassage"></label>

        <?php
        $Liskov = <<<JS

        $('.btn').on('click', function (){
            let pressedButton = this.value;
            
            let messageClass = '.LiskovMassage';
            
            $.ajax({
            url: '/liskov/parameters',
            data: {selectedBird: pressedButton},
            type: 'POST',
            success: function(birdParameters) {                 <!-- receive "birdParameters" string -->
                $(".parameter").empty();                        <!-- Delete last parameters -->

                if (birdParameters.includes('error')){          <!-- "includes" search substring in string not in array -->
                    $(messageClass).html('Barbara Liskov principle broken.');
                } else {
                    $(messageClass).html('');
                }
                
                birdParameters = JSON.parse(birdParameters);    <!-- Convert "birdParameters" JS string to JS object -->
                $("#" + pressedButton + "FlySpeed").html(birdParameters["flySpeed"]);   <!-- Output current         -->
                $("#" + pressedButton + "SwimSpeed").html(birdParameters["swimSpeed"]); <!--            parameters  -->
            },
            error: function() {
              console.log("Failed");
            }
        });
    })
JS;
        $this->registerJs($Liskov);
        ?>

    </div>
</div>

