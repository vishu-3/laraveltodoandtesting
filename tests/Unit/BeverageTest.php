<?php

namespace Tests\Unit;

use App\Beverage;
use App\Exceptions\MinorCannotBuyalcholicBeverageException;
use App\Tuser;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use phpDocumentor\Reflection\Types\This;

class BeverageTest extends TestCase
{
    use DatabaseMigrations;

    private $beverage;
    // public function setUp(): void
    // {
    //     parent::setUp();
    //     $this->beverage = factory(Beverage::class)->make();
    // }
    // /**
    //  * A basic unit test example.
    //  *   @test
    //  * @return void
    //  */
    // public function beverage_has_name()
    // {
    //     $this->assertNotEmpty($this->beverage->name);
    //     // $this->assertTrue(true);
    // }
    // /**
    //  * A basic unit test example.
    //  *   @test
    //  * @return void
    //  */
    // public function beverage_has_type()
    // {
    //     $this->assertNotEmpty($this->beverage->type);
    //     // $this->assertTrue(true);
    // }
    // /**
    //  * A basic unit test example.
    //  *   @test
    //  * @return void
    //  */
    // public function a_minor_user_can_not_buy_alcholic_beverage()
    // {
    //     $beverage = factory(Beverage::class)->make([
    //         'type'  =>  'Alcholic'
    //     ]);

    //     $user  =   factory(User::class)->make([
    //         'age'   =>  '17'
    //     ]);

    //     $this->actingAs($user);



    //     $this->expectException(MinorCannotBuyalcholicBeverageException::class);
    //     $beverage->buy();
    // }
    public function setUp(): void
    {
        parent::setUp();
        $this->beverage = factory(Beverage::class)->create();
    }

    // * A basic unit test example.
    //  *   @test
    //  * @return void
    //  */
    public function test_a_user_can_see_Beverage_page_and_see_beverages()
    {
        // assertTrue('/beverage');
        // $beverage = factory(Beverage::class)->make();

        // $beverage = factory(Beverage::class)->create();
        $response = $this->get('/beverage');
        // $response->assertStatus(200);
        $response->assertSee($this->beverage->name);
        $response->assertStatus(200);
    }
    public function test_a_user_can_visit_single_beverage()
    {
        // $beverage = factory(Beverage::class)->create();
        $response = $this->get('/beverage/' . $this->beverage->id);
        $response->assertStatus(200);
    }
    public function test_a_loggedon_user_can_buy_beverage()
    {
        $user = factory(User::class)->make();
        $this->actingAs($user);
        $data = [
            'beverage_id' => $this->beverage->id,
            'price' => 200,
        ];
        $response = $this->post('/beverage/buy', $data);
        $this->assertDatabaseHas('purchases', $data);
        $response->assertStatus(201);
    }
}
