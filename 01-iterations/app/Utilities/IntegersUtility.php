<?php namespace App\Utilities;

/**
 * @author Rizart Dokollar <r.dokollari@gmail.com
 * @since 4/18/16
 */
class IntegersUtility
{
    /**
     * @param $number string
     * @return int
     */
    public function getLongestBinaryGap($number)
    {
        $bytes = decbin($number);
        $bytes = str_split($bytes);

        $longestSequence = 0;
        $currentSequence = $longestSequence;

        foreach ($bytes as $bit) {
            if ($bit === '0') {
                $currentSequence++;

                continue;
            }

            if ($currentSequence > $longestSequence) {
                $longestSequence = $currentSequence;
            }

            $currentSequence = 0;
        }

        return $longestSequence;
    }
}