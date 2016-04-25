<?php namespace App\OccurrencesInArray;

/**
 * @author Rizart Dokollar <r.dokollari@gmail.com
 * @since 4/21/16
 */
class OddOccurrenceInArray implements OccurrenceInArray
{
    /**
     * @param $elements
     * @return null
     */
    public function findUnPairedElement($elements)
    {
        $unPairedElement = null;

        foreach ($elements as $elementKey => $elementValue) {
            unset($elements[$elementKey]);

            $elements = array_splice($elements, $elementKey);
            
            if (false === ($keyPair = array_search($elementValue, $elements))) {
                $unPairedElement = $elementValue;
                break;
            }

            unset($elements[$keyPair]);
        }

        return $unPairedElement;
    }
}