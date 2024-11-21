<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function test_controladores(): void
    {
        /**
         * main page test.
         */
        $value = 'Pantalla principal';
        $response = $this->get('/');

        $response
            ->assertRedirect('/proyectos');

        /**
         * login test.
         */
        $value = 'Login usuario';
        $response = $this->get('/login');

        $response
            ->assertStatus(200)
            ->assertViewIs('auth.login')
            ->assertSeeText($value, $escaped = true);

        /**
         * users index test.
         */
        $response = $this->get('/users');
        $nombres = [
            'John Doe',
            'Jane Smith',
            'Alice Johnson',
            'Bob Williams',
            'Eva Brown',
        ];

        $response
            ->assertStatus(200)
            ->assertViewIs('users.index')
            ->assertSeeTextInOrder($nombres, $escaped = true);

        /**
         * users show test.
         */
        $response = $this->get("/users/show/0");

        $response
            ->assertStatus(200)
            ->assertViewIs('users.show')
            ->assertSeeText('John Doe', $escaped = true);

        $response = $this->get("/users/show/1");

        $response
            ->assertSeeText('Jane Smith', $escaped = true);

        // Test for invalid ID
        $response = $this->get("/users/show/999");
        $response->assertNotFound();

        $response = $this->get("/users/show/A");
        $response->assertNotFound();

        /**
         * users create test.
         */
        $value = 'Añadir Usuario';
        $response = $this->get('/users/create');

        $response
            ->assertStatus(200)
            ->assertViewIs('users.create')
            ->assertSeeText($value, $escaped = true);

        /**
         * users edit test.
         */
        $id = rand(0, 4);
        $value = "Modificar Usuario";
        $response = $this->get("/users/edit/$id");

        $response
            ->assertStatus(200)
            ->assertViewIs('users.edit')
            ->assertSeeText($value, $escaped = true);

        // Test for invalid ID
        $response = $this->get("/users/edit/999");
        $response->assertNotFound();

        $response = $this->get("/users/edit/A");
        $response->assertNotFound();
    }
}
