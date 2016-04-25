<?php namespace App\OccurrencesInArray;

/**
 * @author Rizart Dokollar <r.dokollari@gmail.com
 * @since 4/21/16
 */
interface OccurrenceInArray
{
    /**
     * @param $elements
     * @return mixed
     */
    public function findUnPairedElement($elements);
}