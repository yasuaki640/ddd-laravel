<?php
declare(strict_types=1);

namespace Packages\Application\UseCase\User\Register;


/**
 * Interface UserRegisterServiceInterface
 * @package Packages\Application\UseCase\User\Register
 */
interface UserRegisterServiceInterface
{
    /**
     * @param UserRegisterCommand $command
     * @return UserRegisterResponse
     */
    public function handle(UserRegisterCommand $command): UserRegisterResponse;
}
