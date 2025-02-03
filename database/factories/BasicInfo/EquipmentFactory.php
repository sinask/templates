<?php

namespace Database\Factories\BasicInfo;

use App\Models\BasicInfo\Equipment;
use App\Models\BasicInfo\Organization;
use Illuminate\Support\Carbon;

class EquipmentFactory
{
    protected $model = Equipment::class;

    public function definition()
    {
        return [
            'code' => $this->faker->word(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'type' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'organization_id' => Organization::factory(),
        ];
    }
}
