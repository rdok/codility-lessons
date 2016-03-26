<?php

/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  26/03/16
 */
namespace App;

    /**
     * Class Equilibrium.
     */
/**
 * Class Equilibrium.
 */
class Equilibrium
{
    /**
     * @var array
     */
    private $data;

    /**
     * Equilibrium constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return int|mixed
     */
    public function getRandomEquilibriumIndex()
    {
        $indices = $this->getIndices();

        return empty($indices) ? $this->noIndices() : $indices[ array_rand($indices) ];
    }

    /**
     * @return array|int
     */
    public function getIndices()
    {
        $indices = [];
        $data = $this->data;
        $dataSize = count($data);
        $totalSum = array_sum($this->data);
        $leftSize = 0;

        for ($index = 0; $index < $dataSize; ++$index) {
            $totalSum = $totalSum - $data[ $index ];

            if ($leftSize === $totalSum) {
                $indices[] = $index;
            }

            $leftSize = $leftSize + $data[ $index ];
        }

        return $indices;
    }

    /**
     * @return int
     */
    private function noIndices()
    {
        return -1;
    }
}