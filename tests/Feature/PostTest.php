<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function all_posts_can_be_viewed()
    {
        $post = Post::factory()->create();

        $response = $this->get('/posts');

        $response->assertSee($post->title);
    }

    /** @test */
    public function a_post_can_be_viewed()
    {
        $post = Post::factory()->create();

        $response = $this->get($post->path());

        $response->assertSee($post->title);
    }
}
