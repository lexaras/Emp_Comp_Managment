<?php

namespace Tests\Feature;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeManagmentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     * @return void
     */
    // public function employee_can_be_added()
    // {
    //     // given
    //     $this->withoutExceptionHandling();
    //     $this->expectException('Illuminate\Auth\AuthenticationException');
    //     $employeeData= ['name' => 'Benas', 
    //                     'email' => 'benas123@gmail.com', 
    //                     'phone' => 37060046490 ,
    //                     'company_id' => 1];
        // when
    //     $response = $this->post('/employees', $employeeData);
    //     // then
    //     $response->assertStatus(302);
    //     $this->assertCount(0, Employee::all());
    //     $response->assertRedirect('/employees/' . $employeeData['name'], ['company_id']);
    // }
    /**
     * @test
     * @return void
     */
    // public function name_is_required_to_create_employee() {
    //     //$this->withoutExceptionHandling();
    //     $this->expectException('Illuminate\Auth\AuthenticationException');
    //     $employeeData = ['name' => '', 'email' => 'testavimas@gmail.com', 'phone' => 37060046490,
    // 'company_id' => 1 ];
    //     $response = $this->post('/employees', $employeeData); 
    //     $response->assertStatus(302);
    //     // $response->assertSessionHasErrors('name');
    //     $response->assertJsonValidationErrors('name');
    //     //patikrina ar tikrai neissaugojo nevalidziu duomenu!
    //     $this->assertCount(0, Employee::all());
    // }

}
