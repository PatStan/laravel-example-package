<?php

namespace PatStan\Example\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PatStan\Example\Models\MyModel;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}

