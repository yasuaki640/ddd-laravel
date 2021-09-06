<?php
declare(strict_types=1);


namespace Packages\Domain\User;


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
     */
    public function __construct(string $userName)
    {
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
