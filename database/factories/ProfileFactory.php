<?php

namespace Database\Factories;
use  App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{

    protected $model= Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'profil_name' => $this->faker->name, // on veut 15 mots
            'user_id' => function (){

                return User::inRandomOrder()->first()->id;
            },
            
            'avatar' => $this->faker->image('public/images'),
        ];
    }
}
