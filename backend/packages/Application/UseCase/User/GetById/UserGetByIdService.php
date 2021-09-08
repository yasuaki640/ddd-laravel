<?php
declare(strict_types=1);

namespace Packages\Application\UseCase\User\GetById;


use Packages\Domain\User\UserFactoryInterface;
use Packages\Domain\User\UserId;
use Packages\Domain\User\UserRepositoryInterface;


/**
 * Class UserGetByIdService
 * @package Packages\Application\UseCase\User\GetById
 */
class UserGetByIdService implements UserGetByIdServiceInterface
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
     * @param UserGetByIdCommand $command
     * @return UserGetByIdResponse
     */
    public function handle(UserGetByIdCommand $command): UserGetByIdResponse
    {
        $userId = new UserId($command->id);

        $user = $this->repository->getById($userId);

        return new UserGetByIdResponse($user);
    }
}
