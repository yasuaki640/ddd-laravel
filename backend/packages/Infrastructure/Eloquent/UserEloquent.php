<?php


namespace Packages\Infrastructure\Eloquent;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class UserEloquent
 * @package Packages\Infrastructure\Eloquent
 */
class UserEloquent extends Authenticatable
{
    use HasApiTokens, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_name',
    ];

    /**
     * @var string
     */
    protected $table = 'users';
}
