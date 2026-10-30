<?php

namespace Tests\Feature;

use Tests\TestCase;

class PosPagesTest extends TestCase
{
    public function test_all_required_pages_are_reachable(): void
    {
        foreach (['/', '/about', '/customers', '/users'] as $path) {
            $this->get($path)->assertOk();
        }
    }

    public function test_customer_page_renders_static_records(): void
    {
        $this->get('/customers')
            ->assertOk()
            ->assertSee('Maria Santos')
            ->assertSee('CUS-005');
    }

    public function test_user_page_renders_static_records(): void
    {
        $this->get('/users')
            ->assertOk()
            ->assertSee('Admin User')
            ->assertSee('USR-005');
    }
}
