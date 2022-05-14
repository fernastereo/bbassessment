<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SettlementtypeSeeder::class,
            CustomSeeder01::class,
            CustomSeeder02::class,
            CustomSeeder03::class,
            CustomSeeder04::class,
            CustomSeeder05::class,
            CustomSeeder06::class,
            CustomSeeder07::class,
            CustomSeeder08::class,
            CustomSeeder09::class,
            CustomSeeder10::class,
            CustomSeeder11::class,
            CustomSeeder12::class,
            CustomSeeder13::class,
            CustomSeeder14::class,
            CustomSeeder15::class,
            CustomSeeder16::class,
            CustomSeeder17::class,
            CustomSeeder18::class,
            CustomSeeder19::class,
            CustomSeeder20::class,
            CustomSeeder21::class,
            CustomSeeder22::class,
            CustomSeeder23::class,
            CustomSeeder24::class,
            CustomSeeder25::class,
            CustomSeeder26::class,
            CustomSeeder27::class,
            CustomSeeder28::class,
            CustomSeeder29::class,
            CustomSeeder30::class,
            CustomSeeder31::class,
            CustomSeeder32::class,
        ]);
    }
}
