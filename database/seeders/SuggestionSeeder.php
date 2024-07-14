<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuggestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suggestion') -> insert ([
            ['topic_name' => 'อยากได้เเป้นบาส',
             's_detail' => 'รร.ทุ่งม่วง เพื่อให้เยาวชนได้ออกกำลังกายเเละหลีกเลี่ยงอยาเสพติด',
            ],
        ]);
    }
}
