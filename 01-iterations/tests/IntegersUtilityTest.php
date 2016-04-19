<?php
use App\Utilities\IntegersUtility;

/**
 * @author Rizart Dokollar <r.dokollari@gmail.com
 * @since 4/19/16
 */
class IntegersUtilityTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_returns_longest_sequence_of_zero()
    {
        $integersUtility = new IntegersUtility();

        $this->assertSame(5, $integersUtility->getLongestBinaryGap(1041));

//        $this->assertSame(5, $integersUtility->getLongestZeroSequence(decbin(1041)));
    }
}