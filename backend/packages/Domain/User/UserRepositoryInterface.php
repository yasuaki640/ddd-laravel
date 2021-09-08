<?php
declare(strict_types=1);

namespace Packages\Domain\User;


/**
 * Interface UserRepositoryInterface
 * @package Packages\Domain\User
 */
interface UserRepositoryInterface
{
    /**
     * @param User $user
     * @return mixed
     */
    public function save(User $user): int;

    /**
     * @param UserId $id
     * @return User
     */
    public function getById(UserId $id): User;
}
