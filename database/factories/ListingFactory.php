<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1/*fake()->numerify()*/,
            'title' => 'Call Center Agent',
            'tags'  => 'Call Center,QC,Supervisor',
            'description' => 'CATI - Computer Aided Telphonic Interviews',
            'slots' => 10,
            'lt' => 500,
            'wage' => 100
        ];
    }
}
