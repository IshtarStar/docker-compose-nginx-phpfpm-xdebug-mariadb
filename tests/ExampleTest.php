<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Example;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $example = new Example();
        $this->assertTrue($example->doSomething());
    }
}
