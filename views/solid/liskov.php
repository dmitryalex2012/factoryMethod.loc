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

        <h3>Select bird for take information about it.</h3>

        <div class="row">

            <?php
            for ($i = 0; $i <= 3; $i++):
                ?>

                <div class="col-sm-3">
                    <div class="makeWidth">
                    <?php
                    switch ($i) {
                        case 1:
                            echo "<input type=\"button\" value=\"Duck\" class=\"btn btn-success btn-lg btn-block\">";
//                            echo Html::a("Duck", ['liskov/parameters'], ['class' => 'btn btn-success btn-lg btn-block']);
                            break;
                        case 2:
                            echo "<input type=\"button\" value=\"Penguin\" class=\"btn btn-success btn-lg btn-block\">";
                            break;
                        case 3:
                            echo "<input type=\"button\" value=\"Eagle\" class=\"btn btn-success btn-lg btn-block\">";
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

            <div class="duckFlySpeed col-sm-3">
                <label></label>
            </div>

            <div class="penguinFlySpeed col-sm-3">
                <label></label>
            </div>

            <div class="eagleFlySpeed col-sm-3">
                <label></label>
            </div>

        </div>


        <div class="swimSpeed row">

            <div class="col-sm-3">
                <label>Swim speed:</label>
            </div>

            <div class="duckSwimSpeed col-sm-3">
                <label></label>
            </div>

            <div class="penguinSwimSpeed col-sm-3">
                <label></label>
            </div>

            <div class="eagleSwimSpeed col-sm-3">
                <label></label>
            </div>

        </div>

    </div>
</div>

