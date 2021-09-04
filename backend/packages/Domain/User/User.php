<?php
declare(strict_types=1);


namespace Packages\Domain\User;


/**
 * Class User
 * @package Packages\Domain\User
 */
class User
{
    /**
     * @var UserId
     */
    private UserId $userId;

    /**
     * @var UserName
     */
    private UserName $userName;

    /**
     * User constructor.
     * @param UserId $userId
     * @param UserName $userName
     */
    public function __construct(UserId $userId, UserName $userName)
    {
        $this->userId = $userId;
        $this->userName = $userName;
    }
}
