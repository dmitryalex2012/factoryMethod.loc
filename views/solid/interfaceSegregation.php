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

