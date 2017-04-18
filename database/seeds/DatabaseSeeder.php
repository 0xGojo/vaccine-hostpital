<?php

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
         $this->call(canboseeder::class);
          $this->call(doituongseeder::class);
           $this->call(loaitintucseeder::class);
            $this->call(loaivaccineseeder::class);
    }
}
