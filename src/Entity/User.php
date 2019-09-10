<?php

namespace App\Entity;

use Hslavich\OneloginSamlBundle\Security\User\SamlUserInterface;

class User implements SamlUserInterface
{
    protected $username;
    private $roles = [];

    // ...

    public function __construct()
    {
        $this->roles = ['ROLE_USER'];
        $this->username = "admin";
    }

    public function setSamlAttributes(array $attributes)
    {
        //$this->email = $attributes['mail'][0];
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

}