<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'testavimas',
            'email' => 'testavimas@gmail.com',
            'password' => Hash::make('testavimas'),
        ]);
        DB::table('users')->insert([
            'name' => 'benas',
            'email' => 'benas@gmail.com',
            'password' => Hash::make('benas123'),
        ]);
        DB::table('users')->insert([
            'name' => 'qwerty',
            'email' => 'qwerty@b.com',
            'password' => Hash::make('qwerty123'),
        ]);
        DB::table('users')->insert([
            'name' => 'naujas_Useris',
            'email' => 'naujas_Useris@gmail.com',
            'password' => Hash::make('naujas_Useris'),
        ]);
        DB::table('users')->insert([
            'name' => 'new_USER',
            'email' => 'new_USER@yahoo.com',
            'password' => Hash::make('new_USER321'),
        ]);
        DB::table('users')->insert([
            'name' => 'VARTOTOJAS',
            'email' => 'VARTOTOJAS@gmail.com',
            'password' => Hash::make('VARTOTOJAS9876'),
        ]);
        DB::table('companies')->insert([
            'title' => 'Senukai',
            'email' => 'senukai@gmail.com',
            'website' =>'http://senukai.lt',
            'path'=>'PS8HTlV8hN6Cu7UKpMEgfmeFCjCocSEEj83isI3t.png'
        ]);
        DB::table('companies')->insert([
            'title' => 'BMW',
            'email' => '',
            'website' =>'https://www.bmw.lt/lt/index.html',
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
            'website' =>'https://www.apple.com/',
            'path'=>'G8Ey7B6vSuLObqsQUUBrl7ycIQCRo41Nb6pwGcxj.png'
        ]);
        DB::table('companies')->insert([
            'title' => 'Microsoft',
            'email' => 'MC@microsoft.com',
            'website' =>'http://www.Microsoft.com',
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
            'website' =>'https://www.nvidia.com/en-us/',
            'path'=>'Y0GWH7qpXUSCgBP5oSfUeGhOHRcpZlERoUW7KcPU.jpg'
        ]);
        DB::table('companies')->insert([
            'title' => 'Teo',
            'email' => 'greitesnis@TEO.com',
            'website' =>'https://www.telia.lt/privatiems',
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
            'website' =>'https://iki.lt/',
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
            'website' =>'https://www.sanitex.eu/',
            'path'=>'ClaiGZm175fzwPNiM8fqYtWrKySYs235dQkGEe0K.png'
        ]);
        DB::table('employees')->insert([
            'name' => 'Benas',
            'email' => 'benas@gmail.com',
            'phone' =>'37060046490',
            'company_id'=> 1
        ]);
        DB::table('employees')->insert([
            'name' => 'fakeEmp',
            'email' => 'fakeEMP@gmail.com',
            'phone' =>'37060046312',
            'company_id'=> 2
        ]);
        DB::table('employees')->insert([
            'name' => 'Rokas',
            'email' => 'rokas@yahoo.com',
            'phone' =>'',
            'company_id'=> 1
        ]);
        DB::table('employees')->insert([
            'name' => 'Goda',
            'email' => 'goda@gmail.com',
            'phone' =>'37068131331',
            'company_id'=> 3
        ]);
        DB::table('employees')->insert([
            'name' => 'Jonas',
            'email' => 'jonasjonas@gmail.com',
            'phone' =>'3706111111',
            'company_id'=> 5
        ]);
        DB::table('employees')->insert([
            'name' => 'Steve',
            'email' => 'steve@mc.com',
            'phone' =>'37066666666',
            'company_id'=> 8
        ]);
        DB::table('employees')->insert([
            'name' => 'JohnDoe',
            'email' => '',
            'phone' =>'',
            'company_id'=> 9
        ]);
        DB::table('employees')->insert([
            'name' => 'Kastytis',
            'email' => 'KKastytis123@gmail.com',
            'phone' =>'3706137490',
            'company_id'=> 5
        ]);
        DB::table('employees')->insert([
            'name' => 'Petras',
            'email' => 'Petraitis@gmail.com',
            'phone' =>'',
            'company_id'=> 10
        ]);
        DB::table('employees')->insert([
            'name' => 'Ona',
            'email' => 'ONACKA@one.lt',
            'phone' =>'3706512383',
            'company_id'=> 6
        ]);
        DB::table('employees')->insert([
            'name' => 'Vytaras',
            'email' => '',
            'phone' =>'',
            'company_id'=> 2
        ]);
        DB::table('employees')->insert([
            'name' => 'Tadas',
            'email' => 'tadasVadas@google.com',
            'phone' =>'37060000000',
            'company_id'=> 10
        ]);
        DB::table('employees')->insert([
            'name' => 'Gitanas',
            'email' => 'gitan.as123@gmail.com',
            'phone' =>'',
            'company_id'=> 10
        ]);
        DB::table('employees')->insert([
            'name' => 'Ingrida',
            'email' => 'Ingrida@seimas.lt',
            'phone' =>'',
            'company_id'=> 10
        ]);

    }
}
