<?php

use App\Equilibrium;

/**
 * Class EquilibriumTest.
 */
class EquilibriumTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     * @test
     * @param array $data
     * @param array $indices
     */
    public function it_returns_indices(array $data, array $indices)
    {
        $equilibrium = new Equilibrium($data);

        $this->assertSame($indices, $equilibrium->getIndices());
    }

    /**
     * @dataProvider provider
     * @test
     * @param array $data
     * @param array $indices
     */
    public function it_returns_random_index(array $data, array $indices)
    {
        $equilibrium = new Equilibrium($data);

        $this->assertTrue(in_array($equilibrium->getRandomEquilibriumIndex(), $indices));
    }

    /**
     * @return array
     */
    public function provider()
    {
        return [
            'original' => [
                'data'    => [-1, 3, -4, 5, 1, -6, 2, 1],
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
