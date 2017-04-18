<?php

use Illuminate\Database\Seeder;
use App\loaivacxin;
class loaivaccineseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $loaivaccine= new loaivacxin();
         $loaivaccine->name="Vắc-xin bất hoạt";
         $loaivaccine->mota="Vắc-xin bất hoạt là các vi sinh vật độc hại bị giết bằng hóa chất hoặc bằng nhiệt";
         $loaivaccine->ghichu=" Ví dụ: các vắc-xin chống cúm, tả, dịch hạch và viêm gan siêu vi A. Hầu hết các vắc-xin loại này chỉ gây đáp ứng miễn dịch không hoàn toàn và ngắn hạn, cần phải tiêm nhắc nhiều lần.";
         $loaivaccine->save();

         $loaivaccine= new loaivacxin();
         $loaivaccine->name="Vắc-xin sống, giảm độc lực";
         $loaivaccine->mota="Vắc-xin sống, giảm độc lực là các vi sinh vật được nuôi cấy dưới những điều kiện đặc biệt nhằm làm giảm đặc tính độc hại của chúng.";
         $loaivaccine->ghichu="Vắc-xin điển hình loại này thường gây được đáp ứng miễn dịch dài hạn và là loại vắc-xin được ưa chuộng dành cho người lớn khỏe mạnh. Các vắc-xin ngừa bệnh sốt vàng, sởi, bệnh ban đào và quai bị đều thuộc loại này.";
         $loaivaccine->save();
     }
}
