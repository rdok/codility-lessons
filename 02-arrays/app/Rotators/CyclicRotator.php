<?php
/**
 * @author Rizart Dokollar <r.dokollari@gmail.com
 * @since 4/20/16
 */

namespace App\Rotators;

class CyclicRotator implements Rotator
{
    /**
     * Rotate and return a given array cyclic.
     *
     * @param array $data
     * @return mixed
     */
    public function rotate(array $data)
    {
        $rotateArray = [];
        $dataSize = sizeof($data);

        for ($index = 0; $index < $dataSize; $index++) {
            if ($index === $dataSize - 1) {
                $rotateArray[0] = $data[$index];

                continue;
            }

            $rotateArray[$index + 1] = $data[$index];
        }

        return $rotateArray;
    }
}