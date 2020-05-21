<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $temp array */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <h2>"Barbara Liskov" principle</h2>

        <h3>Select bird for take information about it.</h3>

        <div class="row">

            <div class="col-lg-4">
                <?php
//                echo Html::a("Select Facebook", ['network/poster_face'], ['class'=>'btn btn-lg btn-success']);
                echo Html::a("Duck", ['#'], ['class'=>'btn btn-lg btn-success']);
                ?>
            </div>

            <div class="col-lg-4">
                <?php
                echo Html::a("Penguin", ['#'], ['class'=>'btn btn-lg btn-success']);
                ?>
            </div>

            <div class="col-lg-4">
                <?php
                echo Html::a("Eagle", ['#'], ['class'=>'btn btn-lg btn-success']);
                ?>
            </div>

        </div>

    </div>
</div>

