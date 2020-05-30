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

        <h2>"Interface segregation" principle</h2>;


        <div class="row">

            <?php
            for ($i = 0; $i <= 3; $i++):
                ?>

                <div class="col-sm-3">
                    <div class="makeWidth">
                        <?php
                        switch ($i) {
                            case 0:
                                echo "<input type=\"button\" value=\"Car transformer\" class=\"btn btn-success btn-lg btn-block\" id='1'>";
                                break;
                            case 1:
                                echo "<input type=\"button\" value=\"Plane transformer\" class=\"btn btn-success btn-lg btn-block\" id='2'>";
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


        <?php
        $ISP = <<<JS

        $('.btn').on('click', function (){
            let pressedButton = this.value;
            
            // let messageClass = '.LiskovMassage';
            
            $.ajax({
            url: '/isp/parameters',
            data: {selectedBird: pressedButton},
            type: 'POST',
            success: function(transformerParameters) {                 <!-- receive "birdParameters" string -->
            
                console.log(transformerParameters);
                // $(".parameter").empty();                        <!-- Delete last parameters -->
                //
                // if (birdParameters.includes('error')){          <!-- "includes" search substring in string not in array -->
                //     $(messageClass).html('Barbara Liskov principle broken.');
                // } else {
                //     $(messageClass).html('');
                // }
                //
                // birdParameters = JSON.parse(birdParameters);    <!-- Convert "birdParameters" JS string to JS object -->
                // $("#" + pressedButton + "FlySpeed").html(birdParameters["flySpeed"]);   <!-- Output current         -->
                // $("#" + pressedButton + "SwimSpeed").html(birdParameters["swimSpeed"]); <!--            parameters  -->
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

