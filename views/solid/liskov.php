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
//                            echo Html::a("Duck", ['liskov/parameters'], ['class' => 'btn btn-success btn-lg btn-block']);
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

            <div class="DuckFlySpeed col-sm-3">
                <label></label>
            </div>

            <div class="PenguinFlySpeed col-sm-3">
                <label></label>
            </div>

            <div class="EagleFlySpeed col-sm-3">
                <label></label>
            </div>

        </div>


        <div class="swimSpeed row">

            <div class="col-sm-3">
                <label>Swim speed:</label>
            </div>

            <div class="DuckSwimSpeed col-sm-3">
                <label></label>
            </div>

            <div class="PenguinSwimSpeed col-sm-3">
                <label></label>
            </div>

            <div class="EagleSwimSpeed col-sm-3">
                <label></label>
            </div>

        </div>

        <label class="LiskovMassage">Message</label>

        <?php
        $Liskov = <<<JS

        function clearBirdLabel (){
            // $('.LiskovMassage').html("");
            $(".DuckFlySpeed").html("");
            $(".PenguinFlySpeed").html("");
            $(".EagleFlySpeed").html("");
            $(".DuckSwimSpeed").html("");
            $(".PenguinSwimSpeed").html("");
            $(".EagleSwimSpeed").html("");
        }


        $('.btn').on('click', function (){
            let pressedButton = this.value;
            
            $.ajax({
            url: '/liskov/parameters',
            data: {selectedBird: pressedButton},
            type: 'POST',
            success: function(birdParameters) {
                clearBirdLabel();
                birdParameters = JSON.parse(birdParameters);  <!-- convert JS string to JS object -->
                $("." + pressedButton + "FlySpeed").html(birdParameters["flySpeed"]);
                $("." + pressedButton + "SwimSpeed").html(birdParameters["swimSpeed"]);
                
                // $('.LiskovMassage').html("");
                // birdParameters.forEach(function(value, key){
                //     console.log(value);
                // });
                
                $('.LiskovMassage').html('');
                for (key in birdParameters) {
                    if (birdParameters[key] == 'error'){
                        $('.LiskovMassage').html('Barbara Liskov principle broken.');
                    }
                }
                
                // console.log(birdParameters.includes('error'));
                // console.log(birdParameters.find(error));
                
                // if ((birdParameters.includes('error')) == true){
                //     $('.LiskovMassage').html('Barbara Liskov principle broken.');
                // } else {
                //     $('.LiskovMassage').html('');
                // }
            },            
            error: function() {
              console.log("Failed");
            }
            })
        })
JS;
        $this->registerJs($Liskov);
        ?>


    </div>
</div>

