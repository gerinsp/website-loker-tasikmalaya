<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class Wordcount
{
    public function countWords()
    {
        $a = 3;
        $b = 2;
        $c = $a + $b;
        return $c;
    }
}

class ExampleTest extends TestCase
{
    public function testCountWords()
    {
        $test = new Wordcount;
        $tests = $test->countWords();
        $this->assertEquals(5, $tests);
    }
}
