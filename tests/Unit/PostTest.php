<?php

namespace Plateena\Demo\Tests\Unit;

use Plateena\Demo\Models\Post;
use Plateena\Demo\Tests\TestCase;

/**
 * Class PostTest
 * @author yourname
 */
class PostTest extends TestCase
{
    /** @test */
    public function a_post_can_be_filtered()
    {
        $this->withoutExceptionHandling();
        $posts = Post::factory(50)->create();

        $this->assertEquals($posts->count(), 50);

        $response = $this->json(
            'GET',
            route('post.index', ['filter' => ['id' => 1]])
        );
    }
}
