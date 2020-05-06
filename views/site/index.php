<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <h2>Pattern "Factory Method"</h2>
        <br>
        <br>

        <?php
        echo Html::a("Select Facebook", ['face/poster_face'], ['class'=>'btn btn-lg btn-success']);
        echo "<br>" . "<br>";
        echo Html::a("Select LinkedIn", ['linked/poster_linked'], ['class'=>'btn btn-lg btn-success']);
        ?>

    </div>

</div>
