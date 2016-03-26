<?php

use App\Equilibrium;

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

        $this->assertTrue(array_key_exists($equilibrium->getRandomIndex(), $indices));
    }

    /**
     * @dataProvider provider
     * @test
     * @param array $data
     * @param array $indices
     */
    public function it_checks_if_an_element_is_equilibrium(array $data, array $indices)
    {
        $equilibrium = new Equilibrium($data);

        $this->assertFalse($equilibrium->isEquilibriumIndex(0));
        $this->assertTrue($equilibrium->isEquilibriumIndex(1));
        $this->assertFalse($equilibrium->isEquilibriumIndex(2));
        $this->assertTrue($equilibrium->isEquilibriumIndex(3));
        $this->assertFalse($equilibrium->isEquilibriumIndex(4));
        $this->assertFalse($equilibrium->isEquilibriumIndex(5));
        $this->assertFalse($equilibrium->isEquilibriumIndex(6));
        $this->assertTrue($equilibrium->isEquilibriumIndex(7));
    }

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
