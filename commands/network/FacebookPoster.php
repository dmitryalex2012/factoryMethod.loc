<?php

namespace app\commands\network;


class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork()
    {
        return new FacebookConnector($this->login, $this->password);
    }
}
