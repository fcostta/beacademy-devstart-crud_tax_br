<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user()
    {
        $user=User::factory()->create();
        $response=$this->post('/login', [
            'email'=> $user->email,
            'password'=> 'password'
        ]);

        $this->actingAs($user);
        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    public function test_create_user()
    {

     
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->actingAs($user);
        $response = $this->get('/users');


        $response= $this->post('/login/create', [
            'name'=>'Admin',
            'email'=>'admin@master.com',
            'password'=>'1q2w3e4r'
        ]);
        
        $response->assertStatus(200);

    }
}
