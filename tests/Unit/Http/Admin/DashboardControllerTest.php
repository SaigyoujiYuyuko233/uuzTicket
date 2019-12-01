<?php
/**
 * ProjectName: uuzTicket.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/12/1
 * Time: 10:59
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

namespace Tests\Unit\Http\Admin;

use App\User;
use Tests\TestCase;

class DashboardControllerTest extends TestCase
{

    public function testRootRedirection()
    {
        $user = factory(User::class)->create([
            'is_admin' => true
        ]);

        $res = $this->actingAs($user)->get('/admin');
        $res->assertRedirect(route('admin.dashboard'));
    }

    public function testShow()
    {
        $user = factory(User::class)->create([
            'is_admin' => true
        ]);

        $res = $this->actingAs($user)->get(route('admin.dashboard'));
        $res->assertViewIs('layouts.admin'); // TODO: 完成 Dashboard 视图后修改这里
    }

}
