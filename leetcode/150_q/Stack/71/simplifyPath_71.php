<?php

class Solution {

    /**
     * @param String $path
     * @return String
     */
    function simplifyPath($path) {
        $paths = explode('/', $path);
        $return = [];
        foreach($paths as $path) {
            if ($path === '' || $path === '.') {
                continue;
            }

            if ($path === '..') {
                array_pop($return);
                continue;
            }

            $return[] = $path;
        }

        return '/'.implode('/', $return);
    }
}

?>