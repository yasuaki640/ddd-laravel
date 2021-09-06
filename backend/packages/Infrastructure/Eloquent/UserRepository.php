<?php


namespace Packages\Infrastructure\Eloquent;


use Packages\Domain\User\User;
use Packages\Domain\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function save(User $user): int
    {
        return UserEloquent::query()->create([
            'user_name' => $user->getUserName()->getValue()
        ])->id;
    }
}
