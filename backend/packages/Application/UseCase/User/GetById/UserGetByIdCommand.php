<?php
declare(strict_types=1);

namespace Packages\Application\UseCase\User\GetById;


/**
 * Class UserGetByIdCommand
 * @package Packages\Application\UseCase\User\GetById
 */
class UserGetByIdCommand
{
    /**
     * @var int
     */
    public int $id;

    /**
     * UserRegisterCommand constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
