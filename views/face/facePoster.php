<?php

use app\commands\socials\SocialNetworkPoster;
use app\commands\socials\FacebookPoster;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <h3>Face Poster</h3>

        <br>

        <?php
        function clientCode(SocialNetworkPoster $creator)
        {
            $creator->post("Hello world!");
        }

            echo "Testing ConcreteCreator1:" . "<br>";
            clientCode(new FacebookPoster("john_smith", "******"));
            echo "\n\n";

        ?>

    </div>

</div>
