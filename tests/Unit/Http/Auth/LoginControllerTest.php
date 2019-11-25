<?php

namespace Tests\Unit\Http\Auth;

use App\User;
use Auth;
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
    public function testAccess()
    {
        $response = $this->get(route('auth.showLoginForm'));
        $response->assertStatus(200);
    }

    /**
     * 测试登录
     *
     * @term login
     * @return void
     */
    public function testLogin()
    {

        $user = factory(User::class)->create([
            'username' => env('TEST_USER'),
            'email' => 'testmail@uuz.org',
        ]);

        // user info
        $post = array(
            'username' => env('TEST_USER'),
            'password' => 'password'
        );

        // login using username
        $res = $this->post(route('auth.login'), $post);
        $res->assertRedirect(route('tickets.index'));
        $this->assertAuthenticatedAs($user);

        // login using email
        $post = array(
            'username' => 'testmail@uuz.org',
            'password' => 'password'
        );

        $res = $this->post(route('auth.login'), $post);
        $res->assertRedirect(route('tickets.index'));
        $this->assertAuthenticatedAs($user);
    }

    /**
     * 测试退出登录
     *
     * @term logout
     * @return void
     */
    public function testLogout()
    {

        // user
        $user = factory(User::class)->create([
            'username' => env('TEST_USER'),
            'email' => 'testmail@uuz.org',
        ]);

        // logout
        $res = $this->actingAs($user)->get(route('auth.logout'));
        $res->assertRedirect(route('auth.login'));
    }

    /**
     * 错误密码
     *
     * @term login
     * @return void
     */
    public function testWrongPassword()
    {

        // create user
        factory(User::class)->create([
            'username' => env('TEST_USER'),
            'email' => 'testmail@uuz.org',
        ]);

        // login form
        $form = array(
            'username' => env('TEST_USER'),
            'password' => 'ThisIsWrong!'
        );

        // login using wrong password
        $this->post(route('auth.login'), $form);
        $this->assertNull(Auth::user());
        $this->assertTrue(Auth::guest());
    }

}
