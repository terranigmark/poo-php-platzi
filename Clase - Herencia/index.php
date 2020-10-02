<?php

final class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    final public function getName()
    {
        return $this->name;
    }
}

class Admin
{

}

$admin = new User('Italo');
echo $admin->getName();