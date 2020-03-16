<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CreateUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserCreation()
    {
        $response = $this->json('POST', '/api/register',[
            'firstName' => 'Demo',
            'lastName'=>'User',
            'email'=>str_random(10) . '@test.com',
            'password'=>'password',
            'city'=>'Some City',
            'state'=>'Some State',
            'country'=>'US',
            'location'=>'My Cool Location',
            'zip'=>22222

        ]);
        $response = assertStatus(200)->assertJsonStructure([
            'success'=>['token', 'name']
                                                           ]);
    }
}
