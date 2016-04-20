<?php
use App\Rotators\CyclicRotator;

/**
 * @author Rizart Dokollar <r.dokollari@gmail.com
 * @since 4/20/16
 */
class CyclicRotatorTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_rotates_an_array()
    {
        $array = [3, 8, 9, 7, 6];
        $cyclicRotator = new CyclicRotator();

        // rotated once
        $expectedArray = [6, 3, 8, 9, 7];

        $this->assertSame($expectedArray, $cyclicRotator->rotate($array));
    }

    /** @test */
    public function it_rotates_an_array_many_times()
    {
        $this->throwException('Not yet implemented.');
    }
}