<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('companies')->insert([
            'title' => 'Senukai',
            'email' => 'senukai@gmail.com',
            'website' =>'http://senukai.lt',
            'path'=>'PS8HTlV8hN6Cu7UKpMEgfmeFCjCocSEEj83isI3t.png'
        ]);
        DB::table('companies')->insert([
            'title' => 'BMW',
            'email' => '',
            'website' =>'http://www.BMW.com',
            'path'=>'iCLcT6lhQp5Kytpsvkej7waM9hka0GicvOJKiDnj.jpg'
        ]);
        DB::table('companies')->insert([
            'title' => 'Jet-Blue',
            'email' => 'JETBLUE@paradise.com',
            'website' =>'http://www.Jet-Blue.com',
            'path'=>'F2FC5q1jCTkTjiNv5AtNLDfE4QgpRryk3CQjzinj.png'
        ]);
        DB::table('companies')->insert([
            'title' => 'Apple',
            'email' => '',
            'website' =>'www.APPLE.COM',
            'path'=>'G8Ey7B6vSuLObqsQUUBrl7ycIQCRo41Nb6pwGcxj.png'
        ]);
        DB::table('companies')->insert([
            'title' => 'MicroSoft',
            'email' => 'MC@microsoft.com',
            'website' =>'http://www.MicroSoft.com',
            'path'=>'739RJ8GJ6NxK8eVvZnrc2KIctLOUG5pmA1EZIirn.png'
        ]);
        DB::table('companies')->insert([
            'title' => 'Maxima',
            'email' => 'maxima@informacija.lt',
            'website' =>'http://www.MAXIMA.lt',
            'path'=>'raH0XhyWpdFhCGYzJaW7cuygNz95T7E5TS4mgeT1.png'
        ]);
        DB::table('companies')->insert([
            'title' => 'Nvidia',
            'email' => '',
            'website' =>'',
            'path'=>'Y0GWH7qpXUSCgBP5oSfUeGhOHRcpZlERoUW7KcPU.jpg'
        ]);
        DB::table('companies')->insert([
            'title' => 'Teo',
            'email' => 'greitesnis@TEO.com',
            'website' =>'http://www.TEO.com',
            'path'=>'rwfTnzs3j1lbrNcH1Kbhh21IDZ3YlcVEKRLcSmea.png'
        ]);
        DB::table('companies')->insert([
            'title' => 'Nemuno baldai',
            'email' => 'NEMUNAS@informacija.RU',
            'website' =>'',
            'path'=>'PS8HTlV8hN6Cu7UKpMEgfmeFCjCocSEEj83isI3t.png'
        ]);
        DB::table('companies')->insert([
            'title' => 'Iki',
            'email' => 'iki@iki.lt',
            'website' =>'www.iki.lt',
            'path'=>'PS8HTlV8hN6Cu7UKpMEgfmeFCjCocSEEj83isI3t.png'
        ]);
        DB::table('companies')->insert([
            'title' =>  'Admiral',
            'email' => 'admiral@games.com',
            'website' =>'',
            'path'=>'PS8HTlV8hN6Cu7UKpMEgfmeFCjCocSEEj83isI3t.png'
        ]);
        DB::table('companies')->insert([
            'title' =>  'Sanitex',
            'email' => 'sanitex@global.com',
            'website' =>'',
            'path'=>'ClaiGZm175fzwPNiM8fqYtWrKySYs235dQkGEe0K.png'
        ]);
    }

}
