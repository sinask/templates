<?php

namespace Database\Factories\BasicInfo;

use App\Models\BasicInfo\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrganizationFactory extends Factory
{
    protected $model = Organization::class;

    public function definition(): array
    {
        return [
            'code' => $this->faker->word(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'is_active' => $this->faker->randomNumber(),
            'type' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'parent_id' => Organization::factory(),
        ];
    }
}
