<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customer') -> insert([
            ['f_name' => 'manee',
             'l_name' => 'meena',
             'c_img' => 'https://image.joox.com/JOOXcover/0/18bf901cf6a9472e/300',
             'phone_n' => '0615852314',
             'user_id' => 'manee01',
             'password' => '061585'],

            ['f_name' => 'somsuk',
             'l_name' => 'sodsai',
             'c_img' => 'https://static.bangkokpost.com/media/content/20231211/c1_2703054_231211104029.jpg',
             'phone_n' => '0645942351',
             'user_id' => 'somsuk02',
             'password' => '064594'],

            ['f_name' => 'arthai',
             'l_name' => 'aodaom',
             'c_img' => 'https://f.ptcdn.info/735/074/000/qyzugsu6dKpPwklKafu-o.jpg',
             'phone_n' => '0632197894',
             'user_id' => 'arthai03',
             'password' => '063219'],

            ['f_name' => 'artid',
             'l_name' => 'seelerd',
             'c_img' => 'https://yt3.googleusercontent.com/BFy6K2qaalPRlZRMUN6xZQ1zmwSC-Qk_H098FMTpemedwqtYJ6Ci4G-wK-OX-8GzuqlhSW8zd8Q=s900-c-k-c0x00ffffff-no-rj',
             'phone_n' => '0854569423',
             'user_id' => 'artid04',
             'password' => '085456'],

            ['f_name' => 'rodtung',
             'l_name' => 'jitmuangnon',
             'c_img' => 'https://cdn.onefc.com/wp-content/uploads/2018/08/Rodtang_Jitmuangnon-hero-1200x1165-champ-600x583.jpg',
             'phone_n' => '0987542984',
             'user_id' => 'rodtung05',
             'password' => '098754'],
        ]);
    }
}
