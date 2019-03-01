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
        //$this->assertCount(2, $posts);
        //dd($posts);
        $this->assertEquals([
            [
                'year' => $first->created_at->format('Y'),
                'month' => $first->created_at->format('F'),
                'published' => 3
            ],
            [
                'year' => $second->created_at->format('Y'),
                'month' => $second->created_at->format('F'),
                'published' => 3
            ]
        ],$posts);
    }
}
