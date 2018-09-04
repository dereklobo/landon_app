<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Title as Title;
use App\ReadOnlyBase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /*public function testTitleModelCount(){
        $title = new Title();
        $this->assertEquals(6,count($title->all()),"It should have 5 titles");
    }

    public function testLastTitleShouldBeProfessor(){
        $title = new Title();
        $title_array = $title->all();
        $this->assertEquals('Professor',array_pop($title_array),"The last title should be professor");
    }*/
}
