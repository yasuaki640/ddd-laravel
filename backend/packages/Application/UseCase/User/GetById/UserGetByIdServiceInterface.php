<?php
declare(strict_types=1);

namespace Packages\Application\UseCase\User\GetById;


/**
 * Interface UserGetByIdServiceInterface
 * @package Packages\Application\UseCase\User\GetById
 */
interface UserGetByIdServiceInterface
{
    /**
     * @param UserGetByIdCommand $command
     * @return UserGetByIdResponse
     */
    public function handle(UserGetByIdCommand $command): UserGetByIdResponse;
}
