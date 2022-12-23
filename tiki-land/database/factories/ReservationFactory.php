<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_id'=>$this->fake()->mt_rand(1,4),
            'room_id'=>$this->fake()->mt_rand(1,5),
            'ref_no'=>$this->fake()->Str::random(8),
            'name'=>$this->fake()->name(),
            'phone'=>$this->fake()->uuid(),
            'date_in'=>$this->fake()->dateTime(),
            'date_out'=>$this->fake()->dateTime(),

        ];
    }
}
