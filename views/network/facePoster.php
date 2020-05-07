<?php

use app\commands\network\SocialNetworkPoster;
use app\commands\network\FacebookPoster;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <h3>Face Poster</h3>

        <br>

        <?php
        function clientCode(SocialNetworkPoster $creator)   // if "SocialNetworkPoster" class absent, then "post" method not found
        {
//            $creator = $creator1;
            $creator->post("Hello world!");
        }

            echo "Testing ConcreteCreator1:" . "<br>";
            clientCode(new FacebookPoster("john_smith", "******"));

        ?>

    </div>

</div>
