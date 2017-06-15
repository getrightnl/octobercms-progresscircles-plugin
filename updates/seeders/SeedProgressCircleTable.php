<?php

namespace GetRight\ProgressCircle\Updates\Seeders;

use GetRight\ProgressCircles\Models\ProgressCircle;
use GetRight\Services\Models\Service;
use Illuminate\Support\Facades\App;
use Faker\Factory;
use Seeder;
use Model;

/**
 * Class SeedProgressCircleTable
 * @package GetRight\ProgressCircle\Updates\Seeders
 * @author getRight
 */
class SeedProgressCircleTable extends Seeder {

    /**
     * Run the seeder.
     */
    public function run() {

        if(App::environment() != 'production') return;

        Model::unguard();

        $faker = Factory::create();

        for($i = 1; $i < 4; $i++){
            ProgressCircle::create([
                'name' => 'Circle ' . $i,
                'title' => substr($faker->word, 0, 75),
                'text' => $faker->text(125),
                'value' => $faker->numberBetween(1, 100)
             ]);
        }

    }

}
