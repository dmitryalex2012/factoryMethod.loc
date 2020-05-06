<?php

namespace app\commands\socials;


class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork()
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}


