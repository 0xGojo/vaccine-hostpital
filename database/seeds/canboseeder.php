<?php

use Illuminate\Database\Seeder;
use App\canbo;
class canboseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $canbo = new canbo();
         $canbo->name="4T";
         $canbo->username='admin';
         $canbo->password=bcrypt('admin');
         $canbo->save();
     }

}
