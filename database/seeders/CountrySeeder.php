<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tnStates = [
            "Bi" => 'Bizerte',
            "Be" => 'Beja',
            "Je" => 'Jendouba',
            "Ke" => 'Kef',
            "Na" => 'Nabeul',
        ];
        $countries = [
            ['code' => 'geo', 'name' => 'Georgia', 'states' => null],
            ['code' => 'usa', 'name' => 'usa', 'states' => null],
            ['code' => 'TN', 'name' => 'Tunisia', 'states' => json_encode($tnStates)],
            ['code' => 'ger', 'name' => 'Germany', 'states' => null],
        ];
        Country::insert($countries);
    }
}
