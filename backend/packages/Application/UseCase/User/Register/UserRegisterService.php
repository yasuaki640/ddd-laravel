<?php
declare(strict_types=1);

namespace Packages\Application\UseCase\User\Register;


use Packages\Domain\User\UserFactoryInterface;
use Packages\Domain\User\UserName;
use Packages\Domain\User\UserRepositoryInterface;

/**
 * Class UserRegisterService
 * @package Packages\Application\UseCase\User\Register
 */
class UserRegisterService implements UserRegisterServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private UserRepositoryInterface $repository;

    /**
     * @var UserFactoryInterface
     */
    private UserFactoryInterface $factory;

    /**
     * UserRegisterService constructor.
     * @param UserRepositoryInterface $repository
     * @param UserFactoryInterface $factory
     */
    public function __construct(UserRepositoryInterface $repository, UserFactoryInterface $factory)
    {
        $this->repository = $repository;
        $this->factory = $factory;
    }

    /**
     * @param UserRegisterCommand $command
     * @return UserRegisterResponse
     */
    public function handle(UserRegisterCommand $command): UserRegisterResponse
    {
        $userName = new UserName($command->userName);

        $user = $this->factory->create($userName);

        $userId = $this->repository->save($user);

        return new UserRegisterResponse($userId);
    }
}
