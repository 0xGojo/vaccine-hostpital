<?php

use Illuminate\Database\Seeder;
use App\doituong;
class doituongseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $doituong = new doituong();
         $doituong->name= "tre so sinh";
         $doituong->ghichu="Tiem cho nhung dua tre so sinh tu 1 den 2 tuoi";
         $doituong->batdau= 5;
         $doituong->ketthuc=8;
         $doituong->save();
     }
}
