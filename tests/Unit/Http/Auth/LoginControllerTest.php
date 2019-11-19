<?php

namespace Tests\Unit\Http\Auth;

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
     * 测试登录
     *
     * @term login
     * @return void
     */
    public function testLogin(){

        // user info
        $user = array(
            'username' => env('TEST_USER'),
            'password' => env('TEST_USER_PASSWORD'),
            'email' => 'testmail@uuz.org'
        );

        $res = $this->post(route('auth.login'), $user);
        $res->assertRedirect(route('tickets.index'));
    }

}
