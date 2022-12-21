<?php

namespace Database\Factories; 
use App\Models\Article;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{

    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(15), // on veut 15 mots
            'body' => $this->faker->text(200), // on veut 50 phrases
            'user_id' => function (){

                return User::inRandomOrder()->first()->id;
            },

            'image' => 'public/images/meat-03',
        ];
    }
}
