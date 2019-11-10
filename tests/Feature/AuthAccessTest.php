<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthAccessTest extends TestCase
{

    /**
     * Test the login view
     *
     * @return void
     */
    public function testLoginView()
    {
        $response = $this->get('/auth/login');
        $response->assertStatus(200);
    }


    /**
     * Test the register view
     *
     * @return void
     */
    public function testRegView()
    {
        $response = $this->get('/auth/register');
        $response->assertStatus(200);
    }

}
