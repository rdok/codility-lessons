<?php

class EquilibriumTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     * @test
     * @param array $cases
     */
    public function it_returns_index(array $cases)
    {
        $equilibrium = new Equilibrium;

        $this->assertEquals($cases[ 'indices' ], $equilibrium->getIndices($cases[ 'array' ]));
    }

    public function provider()
    {
        return [
            'original' => [
                'array'   => [-1, 3, -4, 5, 1, -6, 2, 1],
                'indices' => [1, 3, 7],
            ],
        ];
    }

    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }
}
