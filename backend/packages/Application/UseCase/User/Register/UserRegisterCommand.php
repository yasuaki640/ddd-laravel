<?php


namespace Packages\Application\UseCase\User\Register;


/**
 * Class UserRegisterCommand
 * @package Packages\Application\UseCase\User\Register
 */
class UserRegisterCommand
{
    /**
     * @var string
     */
    public string $userName;

    /**
     * UserRegisterCommand constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->userName = $name;
    }
}
