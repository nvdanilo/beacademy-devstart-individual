<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_is_login_user()
    {
        $response = $this->post('/login', [
            'email'    => "admin@admin.com",
            'password' => "12345678"
        ]);
        
        $response = $this->get('/ordens');

        $response->assertStatus(200);
    }

    public function test_create_customer()
    {

        $response = $this->post('/login', [
            'email'    => "admin@admin.com",
            'password' => "12345678"
        ]);

        $response = $this->get('/clientes/cadastrar');

        $response->assertStatus(200);
    }

    public function test_store_customer()
    {

        $response = $this->post('/login', [
            'email'    => "admin@admin.com",
            'password' => "12345678"
        ]);
        
        $response = $this->post('/clientes/cadastrar', 
        [     
            "name" => "Cliente Teste",
            "nickname" => "Test",
            "cpf" => "00011122233",
            "email" => "teste@teste.com",
            "email_verified_at" => now(),
            "phone" => "(11)789776688",
            "phone_verified_at" => now(),
            "birthday" => "2000-01-01",
            "address" => "Rua Smith",
            "distric" => "Bairro",
            "city" => "Cidade",
            "state" => "Estado"
        ]);

        $response = $this->get('/clientes');

        $response->assertStatus(200);
    }

    public function test_create_order()
    {

        $response = $this->post('/login', [
            'email'    => "admin@admin.com",
            'password' => "12345678"
        ]);

        $response = $this->get('/ordens/nova');

        $response->assertStatus(200);
    }

    public function test_store_order()
    {

        $response = $this->post('/login', [
            'email'    => "admin@admin.com",
            'password' => "12345678"
        ]);
        
        $response = $this->post('/ordens/nova', 
        [     
            "device" => "Device Test",
            "brand" => "Brand Test",
            "model" => "Model Test",
            "serial_number" => "Serial Test",
            "accessories" => "Accessories Test",
            "reported_problem" => "Problem Test",
            "service_description" => "Service Test",
            "observations" => "Observations Test",
            "status" => "Status Test",
            "price" => 70,
            "active" => 1,
        ]);

        $response = $this->get('/ordens');

        $response->assertStatus(200);
    }

}
