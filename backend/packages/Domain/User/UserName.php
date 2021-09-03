<?php
declare(strict_types=1);


namespace packages\Domain\User;


/**
 * Class UserName
 * @package packages\Domain\User
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
