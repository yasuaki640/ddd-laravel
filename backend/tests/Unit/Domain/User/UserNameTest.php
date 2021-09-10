<?php

namespace Tests\Unit\Domain\User;

use Illuminate\Support\Str;
use Packages\Domain\User\Exception\CannotCreateUserNameException;
use Packages\Domain\User\UserName;
use PHPUnit\Framework\TestCase;

class UserNameTest extends TestCase
{
    public function test_user_name_is_up_to_20_characters()
    {
        $str = Str::random(20);

        $userName = new UserName($str);

        $this->assertInstanceOf(UserName::class, $userName);
        $this->assertSame($str, $userName->getValue());
    }

    public function test_longer_than_20_characters_cannot_be_registered()
    {
        $this->expectException(CannotCreateUserNameException::class);

        new UserName(Str::random(21));
    }
}
