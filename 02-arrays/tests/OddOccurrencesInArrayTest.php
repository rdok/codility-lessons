<?php

/**
 * @author Rizart Dokollar <r.dokollari@gmail.com
 * @since 4/21/16
 */
class OddOccurrencesInArrayTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_returns_value_of_unpaired_element()
    {
        $data = [9, 3, 9, 3, 9, 7, 9];
        $expectedOutput = 7;
        $oddOccurrenceInArray = new OddOccurrenceInArray();
        
        $this->assertSame(7, $oddOccurrenceInArray->findUnPairedElement($data));
    }
}