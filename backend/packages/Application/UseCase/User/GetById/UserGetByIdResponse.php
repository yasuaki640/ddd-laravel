<?php
declare(strict_types=1);

namespace Packages\Application\UseCase\User\GetById;


use Illuminate\Contracts\Support\Arrayable;
use Packages\Domain\User\User;

/**
 * Class UserGetByIdResponse
 * @package Packages\Application\UseCase\User\GetById
 */
class UserGetByIdResponse implements Arrayable
{
    /**
     * @var User
     */
    private User $user;

    /**
     * UserCreateResponse constructor.
     * @param User $createdUserId
     */
    public function __construct(User $createdUserId)
    {
        $this->user = $createdUserId;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->user->getId(),
            'user_name' => $this->user->getUserName()
        ];
    }
}
