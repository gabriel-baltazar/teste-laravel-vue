<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    
    public function testIndex()
    {
        $products = Product::factory()->count(3)->create();

        $response = $this->get('/api/products');

        $response->assertStatus(200);
        $response->assertJsonCount(3);
        $response->assertJson($products->toArray());
    }

    public function testStore()
    {
        $data = [
            'name' => 'Product Test',
            'description' => 'Test Description',
            'tension' => '220v',
            'brand' => 'Test Brand',
        ];

        $response = $this->post('/api/products', $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('products', $data);
    }

    public function testUpdate()
    {
        $product = Product::factory()->create();

        $data = [
            'name' => 'Updated Product',
            'description' => 'Updated Description',
            'tension' => '220v',
            'brand' => 'Updated Brand',
        ];

        $response = $this->put("/api/products/{$product->id}", $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('products', $data);
    }

    public function testDestroy()
    {
        $product = Product::factory()->create();

        $response = $this->delete("/api/products/{$product->id}");
    
        $response->assertStatus(200);
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}