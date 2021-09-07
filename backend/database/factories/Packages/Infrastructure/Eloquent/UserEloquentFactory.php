<?php
declare(strict_types=1);

namespace Database\Factories\Packages\Infrastructure\Eloquent;

use Illuminate\Database\Eloquent\Factories\Factory;
use Packages\Infrastructure\Eloquent\UserEloquent;

class UserEloquentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserEloquent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_name' => $this->faker->name(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return Factory
     */
    public function unverified(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
