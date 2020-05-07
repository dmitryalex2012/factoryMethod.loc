<?php

use app\commands\network\SocialNetworkPoster;
use app\commands\network\LinkedInPoster;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <h3>Linked Poster</h3>

        <br>

        <?php
        function clientCode(SocialNetworkPoster $creator)
        {
            $creator->post("Hello world!");
        }

        echo "Testing ConcreteCreator2:" . "<br>";
        clientCode(new LinkedInPoster("john_smith", "******"));
        echo "\n\n";
        ?>


    </div>

</div>
