<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
        
        $this->assertCount(0, $stack);
        
        // echo 'testEmpty';

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        // echo 'testPush';

        array_push($stack, 'gaurav');

        $this->assertCount(1, $stack);

        $this->assertSame(1, count($stack));

        $this->assertSame('gaurav', $stack[count($stack) - 1]);

        array_push($stack, 'marvaha');

        $this->assertCount(2, $stack);

        $this->assertNotEmpty($stack);

        // print_r($stack);
        
        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        // echo 'testPop';

        $this->assertSame('marvaha', array_pop($stack));

        // print_r($stack);

        $this->assertNotEmpty($stack);

        $this->assertSame('gaurav', array_pop($stack));

        $this->assertEmpty($stack);
    }
}