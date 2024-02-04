<?php

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $result = [];
        $this->generateValidParentheses($n, $n, '', $result);
        return $result;
    }

    private function generateValidParentheses($openCount, $closeCount, $current, &$result) {
        if ($openCount === 0 && $closeCount === 0) {
            $result[] = $current;
            return;
        }

        if ($openCount > 0) {
            $this->generateValidParentheses($openCount - 1, $closeCount, $current . '(', $result);
        }

        if ($closeCount > $openCount) {
            $this->generateValidParentheses($openCount, $closeCount - 1, $current . ')', $result);
        }
    }
}

?>