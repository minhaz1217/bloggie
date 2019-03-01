<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class ExampleTest extends TestCase
{
    //use RefreshDatabase;
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
        // given
        $first = factory(\App\Post::class)->create();
        $second = factory(\App\Post::class)->create([
            'created_at'=> \Carbon\Carbon::now()->subMonth()
        ]);

        //when
        $posts = \App\Post::archive();

        // then
        $this->assertCount(2, $posts);

    }
}
