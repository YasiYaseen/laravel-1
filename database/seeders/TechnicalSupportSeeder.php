<?php

namespace Database\Seeders;

use App\Models\TechnicalSupport;
use Illuminate\Database\Seeder;

class TechnicalSupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TechnicalSupport::factory(3)->create();
    }
}
