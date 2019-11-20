<?php

namespace Tests\Unit\Http\Auth;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * RegisterControllerTest
 *
 * @testTerm App\Http\Controllers\Auth\RegisterController
 * @package Tests\Unit\Http\Auth
 */
class RegisterControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 测试注册页是否可以正常访问
     *
     * @term showRegistrationForm
     * @return void
     */
    public function testAccess() {
        $response = $this->get(route('auth.showRegistrationForm'));
        $response->assertStatus(200);
        $response->assertViewIs('auth.register');
    }

    /**
     * 测试注册
     *
     * @term register
     * @return void
     */
    public function testRegister(){

        // user info
        $user = array(
            'username' => env('TEST_USER'),
            'password' => 'password',
            'email' => 'testmail@uuz.org'
        );

        // post
        $res = $this->post(route('auth.register'), $user);
        $res->assertRedirect(route('tickets.index'));

    }

    /**
     * 已登录重定向
     *
     * @term middleware: guest
     * @return void
     */
    public function testUserRedirect() {

        // auth user
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get(route('auth.showRegistrationForm'));
        $response->assertStatus(302);
        $response->assertRedirect(route('tickets.index'));

        // TODO: 完成 '我的工单' 后 添加模板验证
        // $response->assertViewIs('auth.register');
    }

}
