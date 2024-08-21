<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $thechnologiesData=[
            [
                'name' => 'laravel'

            ],
            [
                'name' => 'html'

            ],
            [
                'name' => 'css'

            ],
            [
                'name' => 'vue'

            ],
            [
                'name' => 'javascript'

            ],
            [
                'name' => 'php'

            ],
        ];

        foreach ($thechnologiesData as $technologyData) {
            $technology= new Technology();
            $technology->name = $technologyData['name'];
            $technology->save();
        }


    }
}
