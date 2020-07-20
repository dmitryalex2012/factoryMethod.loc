<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <h2>Pattern "Factory Method"</h2>
        <br>
        <div class="row">
            <div class="col-sm-6">
                    <?php echo Html::a("Select Facebook", ['network/poster_face'], ['class'=>'btn1 btn-lg btn-success']);
                    ?>
            </div>
            <div class="col-sm-6">
                    <?php echo Html::a("Select LinkedIn", ['network/poster_linked'], ['class'=>'btn1 btn-lg btn-success']);
                    ?>
            </div>
        </div>


        <br><br><br>
        <h2>"SOLID" principle</h2>
        <br>

        <?php
        echo Html::a("S", ['solid/single_responsibility'], ['class'=>'btn btn-lg btn-success']);
        echo Html::a("O", ['solid/open_closed'], ['class'=>'btn btn-lg btn-success']);
        echo Html::a("L", ['solid/liskov'], ['class'=>'btn btn-lg btn-success']);
        echo Html::a("I", ['solid/interface_segregation'], ['class'=>'btn btn-lg btn-success']);
        echo Html::a("D", ['solid/dependency_inversion'], ['class'=>'btn btn-lg btn-success']);
        ?>

    </div>

</div>

<br>
<div class="newButton">
    <!--        <p class="newButton">ABC</p>-->
    <!--        <div class="newButton1">-->
                <?php
                echo Html::a("Post", ['post/index'], ['class'=>'buttonPost btn btn-lg btn-success']);
                ?>
    <!--        </div>-->
<!--    <button class="buttonPost">Press</button>-->
</div>


