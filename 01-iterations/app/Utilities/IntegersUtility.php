<?php namespace App\Utilities;

/**
 * @author Rizart Dokollar <r.dokollari@gmail.com
 * @since 4/18/16
 */
class IntegersUtility
{
    /**
     * @param $binary string
     * @return int
     */
    public function getLongestZeroSequence($binary)
    {
        $binary = str_split($binary);

        // default value for longest sequence is zero
        $longestSequence = 0;
        $currentSequence = $longestSequence;

        // loop through each bit
        foreach ($binary as $bit) {

            // if current bit is zero
            if ($bit === '0') {
                //    add to current sequence plus one
                $currentSequence++;
            } else {
                // if current bit is one
                //   check if the new sequence is greater than the longest sequence found
                if ($currentSequence > $longestSequence) {
                    //      if so replace it with the last one
                    $longestSequence = $currentSequence;
                }

                $currentSequence = 0;
            }
        }

        return $longestSequence;
    }
}