<?php
class MinStack {
    private $min = [];
    
    /**
     */
    function __construct() {
        $this->min = [];
    }
  
    /**
     * @param Integer $val
     * @return NULL
     */
    function push($val) {
        array_push($this->min, $val);
    }
  
    /**
     * @return NULL
     */
    function pop() {
        $val = array_pop($this->min);
    }
  
    /**
     * @return Integer
     */
    function top() {
        return $this->min[count($this->min) - 1];
    }
  
    /**
     * @return Integer
     */
    function getMin() {
        return min($this->min);
        
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($val);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */

 ?>