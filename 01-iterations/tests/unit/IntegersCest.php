<?php


class IntegersCest
{
    public function _before(UnitTester $I)
    {
    }

    public function _after(UnitTester $I)
    {
    }

    /**
     * @test
     * @param UnitTester $I
     */
    public function it_finds_longest_sequence_of_zeros_in_binary_representation_of_an_integer(UnitTester $I)
    {
        $randomInt = rand(0, 999999);

        $binaryFormat = decbin($randomInt);
        
        new IntegersUtilities();
    }
}
