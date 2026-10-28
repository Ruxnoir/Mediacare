<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginPageTest extends TestCase
{
    public function test_halaman_login_pasien_dapat_dibuka(): void
    {
        $this->get('/login')
            ->assertOk()
            ->assertSee('Masuk Ke Akun Anda')
            ->assertSee('Masuk dengan Google')
            ->assertSee('Daftar sekarang');
    }

    public function test_halaman_login_admin_dapat_dibuka(): void
    {
        $this->get('/login/admin')
            ->assertOk()
            ->assertSee('Login Admin MEDCARE')
            ->assertSee('Email Admin');
    }

    public function test_halaman_login_dokter_dapat_dibuka(): void
    {
        $this->get('/login/dokter')
            ->assertOk()
            ->assertSee('Login Dokter MEDCARE')
            ->assertSee('Email Dokter');
    }
}
