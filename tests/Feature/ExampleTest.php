<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Beranda mengarahkan pengunjung ke halaman login.
     */
    public function test_beranda_mengarahkan_ke_halaman_login(): void
    {
        $this->get('/')->assertRedirect(route('login'));
    }
}
