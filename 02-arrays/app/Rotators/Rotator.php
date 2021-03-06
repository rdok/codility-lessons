<?php
/**
 * @author Rizart Dokollar <r.dokollari@gmail.com
 * @since 4/20/16
 */

namespace App\Rotators;

interface Rotator
{
    /**
     * Rotate and return a given array.
     *
     * @param array $data
     * @return mixed
     */
    public function rotate(array $data);

    /**
     * Rotate an array multiple times.
     * @param $array
     * @param $times
     * @return mixed
     */
    public function rotateMultipleTimes($array, $times);
}