<?php

namespace Tests\Unit\Http\Auth;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * LoginControllerTest
 *
 * @testTerm App\Http\Controllers\Auth\LoginController
 * @package Tests\Unit\Http\Auth
 */
class LoginControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 测试登录页是否可以正常访问
     *
     * @term showLoginForm
     * @return void
     */
    public function testAccess() {
        $response = $this->get(route('auth.showLoginForm'));
        $response->assertStatus(200);
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
            'username' => 'Yuyuko',
            'password' => '123123123',
            'email' => 'testmail@uuz.org'
        );

        $res = $this->post(route('auth.register'), $user);
        $res->assertStatus(302);

    }

}
