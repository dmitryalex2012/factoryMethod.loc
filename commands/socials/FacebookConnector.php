<?php

namespace app\commands\socials;


class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn()
    {
        echo "Send HTTP API request to log in user $this->login with password $this->password" . "<br>";
    }

    public function logOut()
    {
        echo "Send HTTP API request to log out user $this->login" . "<br>";
    }

    public function createPost($content)
    {
        echo "Send HTTP API requests to create a post in Facebook timeline." . "<br>";
//        echo "Send HTTP API requests to create a post in Facebook timeline $content." . "<br>";
    }
}
