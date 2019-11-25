<?php

namespace Tests\Unit\Http\Auth;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VerificationControllerTest extends TestCase
{

    use RefreshDatabase;

    /**
     * 测试未验证重定向
     *
     * @term middleware: EmailIsVerified
     * @return void
     */
    public function testUnVerifyRedirection()
    {
        $user = factory(User::class)->create([
            'email_verified_at' => null
        ]);

        $res = $this->actingAs($user)->get(route('tickets.index'));
        $res->assertRedirect(route('auth.verification.notice'));
        $res->assertStatus(302);
    }

    /**
     * 测试已认证重定向
     *
     * @term middleware: EmailIsVerified
     * @return void
     */
    public function testVerifiedRedirection()
    {
        $user = factory(User::class)->create();

        $res = $this->actingAs($user)->get(route('auth.verification.notice'));
        $res->assertRedirect(route('tickets.index'));
        $res->assertStatus(302);
    }

}
