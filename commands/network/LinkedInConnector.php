<?php

namespace app\commands\network;


class LinkedInConnector implements SocialNetworkConnector
{
    private $email, $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn()
    {
        echo "Send HTTP API request to log in user $this->email with password $this->password" . "<br>";
    }

    public function logOut()
    {
        echo "Send HTTP API request to log out user $this->email" . "<br>";
    }

    public function createPost($content)
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline" . "<br>";
    }
}
