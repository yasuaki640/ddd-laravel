<?php
declare(strict_types=1);

namespace Packages\Infrastructure\Eloquent;


use Packages\Domain\User\Exception\CannotCreateUserNameException;
use Packages\Domain\User\User;
use Packages\Domain\User\UserFactoryInterface;
use Packages\Domain\User\UserId;
use Packages\Domain\User\UserName;

/**
 * Class UserFactory
 * @package Packages\Infrastructure\Eloquent
 */
class UserFactory implements UserFactoryInterface
{
    /**
     * @param UserName $userName
     * @return User
     */
    public function create(UserName $userName): User
    {
        return new User(null, $userName);
    }

    /**
     * @param UserEloquent $eloquent
     * @return User
     * @throws CannotCreateUserNameException
     */
    public function createFromEloquent(UserEloquent $eloquent): User
    {
        return new User(
            new UserId($eloquent->id),
            new UserName($eloquent->user_name)
        );
    }
}
