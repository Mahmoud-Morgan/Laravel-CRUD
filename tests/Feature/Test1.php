<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function testBasicTest()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }
        
    public function testBasicTest2()
    {
        $response = $this->get('/api');

        $response->assertStatus(200);
    }
  
    public function testBasicTest3()
    {
        $response = $this->post('/api/products/31');

        $response->assertStatus(200);
    }

}
