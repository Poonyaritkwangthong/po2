<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news') -> insert([
            ['name_news' => 'รับสมัครจิตรอาสาปลูกต้นไม้ให้เเก้หมู่บ้าน',
             'n_img' => 'tee.jpg',
             'n_location' => 'ซอยทุ่งสงคราม ',
             'n_detail' => 'มีอาหารกลางวันเลี้ยง',
             'n_date' => '02/02/2024'],

            ['name_news' => 'ทำถนน',
             'n_img' => 'road.jpg',
             'n_location' => 'ซอย2',
             'n_detail' => 'เครื่องจักรกำลังทำงาน กรุณาขับขี่อย่างช้าๆ',
             'n_date' => '25/02/2024'],
     ]);
    }
}
