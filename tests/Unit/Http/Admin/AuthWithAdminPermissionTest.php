<?php
/**
 * ProjectName: uuzTicket.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/12/1
 * Time: 11:09
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

namespace Tests\Unit\Http\Admin;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthWithAdminPermissionTest extends TestCase
{
    use RefreshDatabase;

    public function testRedirection()
    {
        // is_admin == false
        $user = factory(User::class)->create();

        $res = $this->actingAs($user)->get(route('admin.dashboard'));
        $res->assertRedirect(route('tickets.index'));
    }
}
