<?php

use Illuminate\Database\Seeder;
use App\loaitintuc;
class loaitintucseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
           $loaitintuc = new loaitintuc();
           $loaitintuc->name = "vaccine moi";
           $loaitintuc->mota = "thong tin ve nhung loai vaccine moi ra";
           $loaitintuc->save();

           $loaitintuc = new loaitintuc();
           $loaitintuc->name = "benh moi";
           $loaitintuc->mota = "thong tin ve nhung loai benh moi dang phat sinh dien rong";
           $loaitintuc->save();
     }
}
