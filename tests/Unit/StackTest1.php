<?php 
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class StackTest1 extends TestCase
{
    public function testPushAndPop()
    {
        $stack = [];

        // echo 'count stack ';
        // print_r(count($stack));
        
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');

        // echo"____________";print_r($stack);
        
        $this->assertSame('foo', $stack[count($stack)-1]);

        // print_r(count($stack)-1);

        // print_r($stack[count($stack)-1]);

        $this->assertSame(1, count($stack));

        // print_r(count($stack));
        // print_r($stack);

        $this->assertSame('foo', array_pop($stack));

        // print_r($stack);

        $this->assertSame(0, count($stack));

    }
}