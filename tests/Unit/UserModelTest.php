<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModelTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function user_has_full_name_attribute()
    {
        $user   =   User::create([
            'firstname' => 'Vishal',
            'lastname' => 'Upare',
            'email' => 'vupare@gmail.com',
            'password' => 'secret'
        ]);
        $this->assertEquals('Vishal Upare', $user->fullname);
    }
}
