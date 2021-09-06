<?php
declare(strict_types=1);

namespace Packages\Infrastructure\Eloquent;


use Packages\Domain\User\User;
use Packages\Domain\User\UserFactoryInterface;
use Packages\Domain\User\UserName;

class UserFactory implements UserFactoryInterface
{
    public function create(UserName $userName): User
    {
        return new User(null, $userName);
    }
}
