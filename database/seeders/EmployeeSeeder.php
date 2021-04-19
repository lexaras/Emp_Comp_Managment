<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
