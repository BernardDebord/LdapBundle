<?php

namespace IMAG\LdapBundle\Event;

use Symfony\Component\EventDispatcher\Event;

use Symfony\Component\Security\Core\User\UserInterface;

use IMAG\LdapBundle\User\LdapUserInterface;

class LdapUserEvent extends Event
{
    private $user;
    private $password;

    public function __construct(LdapUserInterface $user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }
    
    public function getPassword()
    {
    	return $this->password;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
}
