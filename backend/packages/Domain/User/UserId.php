<?php
declare(strict_types=1);


namespace packages\Domain\User;


/**
 * Class UserId
 * @package packages\Domain\User
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
