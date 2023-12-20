<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $alias = rand(0,5)<2?$this->generate_hash(15):null;
        $alive = rand(0,1)==1;
        return [
            "long_url"=>$this->faker->url,
            "short"=>$this->generate_hash(7),
            "alias"=>$alias,
            "alive"=>$alive,
            "expiration_date"=>$this->faker->dateTimeThisDecade(),
        ];
    }

    public function generate_hash(int $length = 7):string{

        $possible_characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXZY";

        $hash_generated = "";

        forEach( range(0, $length) AS $value){

            $index_random = rand(0,strlen($possible_characters)-1);

            $hash_generated.= $possible_characters[$index_random];
        }

        return $hash_generated;
    }
}