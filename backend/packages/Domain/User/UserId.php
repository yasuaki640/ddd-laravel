<?php
declare(strict_types=1);


namespace Packages\Domain\User;


/**
 * Class UserId
 * @package Packages\Domain\User
 */
class UserId
{
    /**
     * @var int
     */
    private int $value;

    /**
     * UserId constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
