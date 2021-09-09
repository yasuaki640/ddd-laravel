<?php
declare(strict_types=1);

namespace Packages\Infrastructure\Eloquent;


use Packages\Domain\User\User;
use Packages\Domain\User\UserFactoryInterface;
use Packages\Domain\User\UserId;
use Packages\Domain\User\UserName;
use Packages\Domain\User\UserRepositoryInterface;

/**
 * Class UserRepository
 * @package Packages\Infrastructure\Eloquent
 */
class UserRepository implements UserRepositoryInterface
{
    /**
     * @var UserFactoryInterface
     */
    private UserFactoryInterface $factory;

    /**
     * UserRepository constructor.
     * @param UserFactoryInterface $factory
     */
    public function __construct(UserFactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param User $user
     * @return int
     */
    public function save(User $user): int
    {
        return UserEloquent::query()->create([
            'user_name' => $user->getUserName()->getValue()
        ])->id;
    }

    /**
     * @param UserId $id
     * @return User
     */
    public function getById(UserId $id): User
    {
        $userEloquent = UserEloquent::find($id->getValue());

        return $this->factory->createFromEloquent($userEloquent);
    }

    /**
     * @param UserName $name
     * @return bool
     */
    public function existsDuplicateUserName(UserName $name): bool
    {
        return UserEloquent::query()
            ->where('user_name',$name->getValue())
            ->exists();
    }
}
