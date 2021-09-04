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
    private string $userName;

    /**
     * UserName constructor.
     * @param string $userName
     */
    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }
}
