<?php
declare(strict_types=1);


namespace Packages\Domain\User;


use Packages\Domain\User\Exception\CannotCreateUserNameException;

/**
 * Class UserName
 * @package Packages\Domain\User
 */
class UserName
{
    /**
     * @var string
     */
    private string $value;

    /**
     * UserName constructor.
     * @param string $userName
     * @throws CannotCreateUserNameException
     */
    public function __construct(string $userName)
    {
        if (strlen($userName) > 20) {
            throw new CannotCreateUserNameException('Username must be up to 20 characters');
        }

        $this->value = $userName;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }


}
