
42. Trapping Rain Water

https://leetcode.com/problems/trapping-rain-water/

level -> hard

Given n non-negative integers representing an elevation map where the width of each bar is 1, compute how much water it can trap after raining.

 

Example 1:


Input: height = [0,1,0,2,1,0,1,3,2,1,2,1]
Output: 6
Explanation: The above elevation map (black section) is represented by array [0,1,0,2,1,0,1,3,2,1,2,1]. In this case, 6 units of rain water (blue section) are being trapped.
Example 2:

Input: height = [4,2,0,3,2,5]
Output: 9
 

Constraints:

n == height.length
1 <= n <= 2 * 10^4
0 <= height[i] <= 10^5


# Intuition
<!-- Describe your first thoughts on how to solve this problem. -->
Dynamic Programming


In brute force, we iterate over the left and right parts again and again just to find the highest bar size upto that index. But, this could be stored. Voila, dynamic programming.
# Approach
<!-- Describe your approach to solving the problem. -->
Algorithm

* Find maximum height of bar from the left end upto an index i in the array left_max.
* Find maximum height of bar from the right end upto an index i in the array right_max.
* Iterate over the height array and update ans:
Add min⁡(left_max[i],right_max[i])−height[i] to ans
# Complexity
- Time complexity:
<!-- Add your time complexity here, e.g. $$O(n)$$ -->
- O(n)O(n)O(n).

We store the maximum heights upto a point using 2 iterations of O(n)O(n)O(n) each.
We finally update ans\text{ans}ans using the stored values in O(n)O(n)O(n).
Space complexity: 
- Space complexity:
- O(n)O(n)O(n) extra space.

<!-- Add your space complexity here, e.g. $$O(n)$$ -->

# Code
```
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height) {

        $ans = 0;
        $size = count($height);
        
        $maxLeft = $maxRight = [];
        $maxLeft[0] = $height[0];
        for ($i = 1; $i < $size; $i++){
            $maxLeft[$i] = max($maxLeft[$i-1],$height[$i]);              
        }

        $maxRight[$size - 1] = $height[$size - 1];
        for ($i = $size; $i >= 0; $i--){
            $maxRight[$i] = max($maxRight[$i+1], $height[$i]);
        }

        for ($i = 1; $i < $size - 1; $i++){
            $ans += min($maxLeft[$i],$maxRight[$i]) - $height[$i];      
        }

        return $ans;
        
    }
}
```