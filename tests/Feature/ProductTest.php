<?php

// tests/Feature/ProductTest.php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_product_can_be_created()
    {
        $response = $this->post('/products', [
            'name' => 'Test Product',
            'description' => 'Test description',
            'price' => 100,
            'quantity' => 10,
        ]);

        $response->assertRedirect('/products');
        $this->assertDatabaseHas('products', ['name' => 'Test Product']);
    }
}
