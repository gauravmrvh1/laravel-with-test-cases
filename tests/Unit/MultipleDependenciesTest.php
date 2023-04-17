<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class MultipleDependenciesTest extends TestCase
{
    public function testFirst()
    {
        $this->assertTrue(true);
        
        return 'GAURAV';
    }

    public function testSecond()
    {
        $this->assertTrue(true);

        return 'MARVAHA';
    }

    /**
     * @depends testFirst
     * @depends testSecond
     */
    public function testConsumer(string $a, string $b)
    {
        echo $a . ' ' . $b;

        $this->assertSame('GAURAV', $a);
        $this->assertEquals('MARVAHA', $b);
    }
}