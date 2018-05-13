<?php

namespace Tests\Feature;

use App\Http\Controllers\PostController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testPostcontroller()
    {
        $event = new PostController();
        $event->index();
        $event->assertStatus(200);
    }
}
