<?php

/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  26/03/16
 */
namespace App;

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
     * @return array|int
     */
    public function getIndices()
    {
        $indices = [];

        $dataSize = count($this->data);

        for ($index = 0; $index < $dataSize; ++$index) {
            if ($this->isEquilibriumIndexOfLeftPart($index, $this->data[ $index ])) {
                $indices[] = $this->data[ $index ];
            }
        }

        return 0 === count($indices) ? $this->noIndices() : $indices;
    }

    /**
     * @param $equilibriumIndex
     * @return bool
     */
    public function isEquilibriumIndexOfLeftPart($equilibriumIndex)
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

    /**
     * @return int
     */
    private function noIndices()
    {
        return -1;
    }
}