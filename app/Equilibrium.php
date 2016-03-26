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
    public function getRandomIndex()
    {
        $indices = $this->getIndices();

        return empty($indices) ? $this->noIndices() : array_rand($indices);
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

    /**
     * @param $equilibriumIndex
     * @return bool
     */
    public function isEquilibriumIndex($equilibriumIndex)
    {
        $lowerIndices = 0;

        for ($index = 0; $index < $equilibriumIndex; ++$index) {
            $lowerIndices = $lowerIndices + $this->data[ $index ];
        }

        $higherIndices = 0;
        $dataSize = count($this->data);

        for ($index = $equilibriumIndex + 1; $index < $dataSize; ++$index) {
            $higherIndices = $higherIndices + $this->data[ $index ];
        }

        return $lowerIndices === $higherIndices;
    }
}