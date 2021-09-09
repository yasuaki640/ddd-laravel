<?php
declare(strict_types=1);

namespace Packages\Application\UseCase\User\Register;


use Illuminate\Contracts\Support\Arrayable;

/**
 * Class UserRegisterResponse
 * @package Packages\Application\UseCase\User\Register
 */
class UserRegisterResponse implements Arrayable
{
    /**
     * @var int
     */
    private int $createdUserId;

    /**
     * UserCreateResponse constructor.
     * @param int $createdUserId
     */
    public function __construct(int $createdUserId)
    {
        $this->createdUserId = $createdUserId;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->createdUserId
        ];
    }
}
