<?php

namespace Tests\Unit\Http\Auth;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticateTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 测试未登录重定向
     *
     * @term: middleware - redirectTo
     * @return void
     */
    public function testRedirection() {
        $res = $this->get(route('tickets.index'));
        $res->assertRedirect(route('auth.showLoginForm'));
    }

    /**
     * 已认证重定向
     *
     * @term: middleware - redirectTo
     * @return void
     */
    public function testAuthedRedirection()
    {
        $user = factory(User::class)->create();

        // login form
        $res = $this->actingAs($user)->get(route('auth.showLoginForm'));
        $res->assertRedirect(route('tickets.index'));

        // reg form
        $res = $this->actingAs($user)->get(route('auth.showRegistrationForm'));
        $res->assertRedirect(route('tickets.index'));
    }

    /**
     * 已登录用户访问测试
     *
     * @term middleware - redirectTo
     */
    public function testUserAccess()
    {
        $user = factory(User::class)->create();

        $res = $this->actingAs($user)->get(route('tickets.index'));
        $res->assertViewIs('tickets.index');
        $res->assertStatus(200);
        $res->assertSuccessful();

    }

}
