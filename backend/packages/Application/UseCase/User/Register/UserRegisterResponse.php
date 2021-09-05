<?php


namespace Packages\Application\UseCase\User\Register;


/**
 * Class UserRegisterResponse
 * @package Packages\Application\UseCase\User\Register
 */
class UserRegisterResponse
{
    /**
     * @var string
     */
    private string $createdUserId;

    /**
     * UserCreateResponse constructor.
     * @param string $createdUserId
     */
    public function __construct(int $createdUserId)
    {
        $this->createdUserId = $createdUserId;
    }
}
