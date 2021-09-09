<?php
declare(strict_types=1);

namespace Packages\Domain\User;


/**
 * Class UserService
 * @package Packages\Domain\User
 */
class UserService
{
    /**
     * @var UserRepositoryInterface
     */
    private UserRepositoryInterface $repository;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $repository
     */
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param UserName $userName
     * @return bool
     */
    public function exists(UserName $userName): bool
    {
        return $this->repository->existsDuplicateUserName($userName);
    }


}
