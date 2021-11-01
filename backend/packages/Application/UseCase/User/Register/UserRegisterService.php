<?php
declare(strict_types=1);

namespace Packages\Application\UseCase\User\Register;


use Packages\Domain\User\Exception\CannotCreateUserNameException;
use Packages\Domain\User\Exception\CannotCreateUserException;
use Packages\Domain\User\UserFactoryInterface;
use Packages\Domain\User\UserName;
use Packages\Domain\User\UserRepositoryInterface;
use Packages\Domain\User\UserService;

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
     * @var UserService
     */
    private UserService $service;

    /**
     * UserRegisterService constructor.
     * @param UserRepositoryInterface $repository
     * @param UserFactoryInterface $factory
     * @param UserService $service
     */
    public function __construct(
        UserRepositoryInterface $repository,
        UserFactoryInterface $factory,
        UserService $service
    )
    {
        $this->repository = $repository;
        $this->factory = $factory;
        $this->service = $service;
    }

    /**
     * @param UserRegisterCommand $command
     * @return UserRegisterResponse
     * @throws CannotCreateUserNameException|CannotCreateUserException
     */
    public function handle(UserRegisterCommand $command): UserRegisterResponse
    {
        $userName = new UserName($command->userName);

        if ($this->service->exists($userName)) {
            throw new CannotCreateUserException('A user with the same user name already exists.');
        }
        $user = $this->factory->create($userName);

        $userId = $this->repository->save($user);

        return new UserRegisterResponse($userId);
    }
}
