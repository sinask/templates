<?php

namespace Database\Factories\BasicInfo;

use App\Models\BasicInfo\CostCenter;
use App\Models\BasicInfo\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CostCenterFactory extends Factory
{
    protected $model = CostCenter::class;

    public function definition(): array
    {
        return [
            'code' => $this->faker->word(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'isActive' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'organization_id' => Organization::factory(),
        ];
    }
}
