<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('problem') -> insert ([
            ['problem_name' => 'ท่อประปาเเตก',
             'p_img' => 'pic1.jpg',
             'p_detail' =>'มีน้ำถ่วมขัง',
             'p_location' => 'หน้า รร.ทุ่งม่วง',
             'p_date' => '13/02/2024'],
             
            ['problem_name' => 'ลูกบ้านทะเลาะกัน',
             'p_img' => 'pic2.jpg',
             'p_detail' =>'ส่งเสียงดัง สร้างความรำคาญ',
             'p_location' => '8/2 ชอย2',
             'p_date' => '10/02/2024'],

        ]);
    }
}
