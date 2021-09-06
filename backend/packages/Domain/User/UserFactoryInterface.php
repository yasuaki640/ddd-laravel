<?php
declare(strict_types=1);

namespace Packages\Domain\User;


/**
 * Interface UserFactoryInterface
 * @package Packages\Domain\User
 */
interface UserFactoryInterface
{
    /**
     * @param UserName $userName
     * @return User
     */
    public function create(UserName $userName): User;
}
