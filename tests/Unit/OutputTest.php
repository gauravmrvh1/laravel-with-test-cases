<?php 
// declare(strict_types=1);
use App\Models\Slot;
use App\Models\Doctor;
use App\CustomClass\Greeter;
use PHPUnit\Framework\TestCase;

final class OutputTest extends TestCase
{
    public function test()
    {

        // https://phpunit.de/getting-started/phpunit-9.html


        
        // $greeter = new Greeter;

        // $greeting = $greeter->greet('Alice');

        // $this->assertSame('Hello, Alice!', $greeting);
        

        // $this->assertContainsOnly('string', ['1', '2', 3]);

        /* $this->assertContainsOnlyInstancesOf(
            Doctor::class,
            [
                new Doctor, 
                // new Slot, 
            ]
        ); */


        // $this->assertCount(0, []); // true
        // $this->assertCount(0, ['foo']); // false
        // $this->assertCount(1, ['foo']); // true



        // $this->assertDirectoryExists('/var/www/html/example-app/app/Controllers'); // false
        // $this->assertDirectoryExists('/var/www/html/example-app/app/Http/Controllers'); // true



        // $this->assertDirectoryIsReadable('/var/www/html/example-app/storage/framework/cache'); // true
        // $this->assertDirectoryIsWritable('/var/www/html/example-app/storage/framework/cache'); // true



        // $this->assertEmpty([]); //true
        // $this->assertEmpty(['foo']); //false


        // $this->assertEquals(1, 0); //false
        // $this->assertEquals(0, 0); //true
        // $this->assertEquals(1, '1');

        /* $expected = new stdClass;
        $expected->foo = 'foo';
        $expected->bar = 'bar';

        $actual = new stdClass;
        $actual->foo = 'foo';
        $actual->bar = 'bar';
        // $actual->bar = 'baz';
        // $actual->baz = 'bar';

        $this->assertEquals($expected, $actual); */


        // $this->assertEquals(['a', 'b', 'c'], ['a', 'b', 'c']); // true
        // $this->assertEquals(['a', 'b', 'c'], ['a', 'c', 'd']); // false



        // $this->assertEqualsIgnoringCase('foo', 'FOO'); // true
        // $this->assertEqualsIgnoringCase('foo', 'FOOO'); // false



        // $this->expectOutputString('foo');
        // print 'foo';


        // $this->assertFileExists('/var/www/html/example-app/app/Http/Controllers/Controller.php'); // true
        // $this->assertFileExists('/var/www/html/example-app/app/Http/Controllers/Controllers.php'); // false


        // $this->assertFileIsReadable('/var/www/html/example-app/app/Http/Controllers/Controller.php'); // true
        // $this->assertFileIsReadable('/var/www/html/example-app/app/Http/Controllers/Controllers.php'); // false

        // $this->assertGreaterThan(2, 1); // false
        // $this->assertGreaterThan(1, 2); // true

        // $this->assertLessThan(1, 2); // false
        // $this->assertLessThan(2, 1); // true

        // $this->assertGreaterThanOrEqual(2, 1); // false
        // $this->assertGreaterThanOrEqual(1, 1); // true
        // $this->assertGreaterThanOrEqual(1, 2); // true

        // $this->assertLessThanOrEqual(1, 2);
        // $this->assertLessThanOrEqual(2, 1);
        // $this->assertLessThanOrEqual(2, 2);

        // $this->assertInfinite(1);

        // $this->assertIsArray(null);
        // $this->assertIsArray([]);

        // $this->assertIsBool(null);
        // $this->assertIsBool(true);
        // $this->assertIsBool(false);


        // $this->assertIsFloat(2.4);
        // $this->assertIsFloat(null);

        // $this->assertIsInt(1.2);
        // $this->assertIsInt(1);

        // $this->assertIsNumeric('null'); // false
        // $this->assertIsNumeric(1); // true

        // $this->assertIsString(null);
        // $this->assertIsString('null');


        // $this->assertIsReadable('/var/www/html/example-app/app/Http/Controllers/Controller.php');
        // $this->assertIsWritable('/var/www/html/example-app/app/Http/Controllers/Controller.php');


        // $this->assertNan(1);
        // $this->assertNan(acos(1.01));

        // $this->assertNull('foo');
        // $this->assertNull(null);


        // $this->assertStringMatchesFormat('%o%', 'oop');

        // $this->assertMatchesRegularExpression('/foo/', 'foo'); // true

        // $this->assertStringMatchesFormat('%i', '+122');
        // $this->assertStringMatchesFormat('%i', '122');

        // $this->assertStringMatchesFormat('%d', '+122');

        // $this->assertStringMatchesFormat('%c', 'gaurav');
        // $this->assertStringMatchesFormat('%c', 'G');

        // $this->assertSame('2204', 2204);
        // $this->assertSame(2204, 2204);





        // $this->assertSame([1, 21], [1, 2]); // false
        // $this->assertSame([1, 2], [1, 2]); // true

        // $this->assertSameSize([1, 2], [1]);
        // $this->assertSameSize([1, 2], [1, 2]);


        // $this->assertTrue(true); // true
        // $this->assertTrue(false); // false
        // $this->assertFalse(false); // true


        // $this->assertArrayHasKey('foo', ['bar' => 'baz']);
        // $this->assertArrayHasKey('foo', ['foo' => 'baz']);

        // $this->assertContains(4, [1, 2, 3]);
        // $this->assertContains(3, [1, 2, 3]);

    }


    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo'); // true
        // $this->expectOutputString('Foo'); // false
        print('foo');
    }

    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');

        // print 'baz'; // false
        print 'bar'; // true
    }
}