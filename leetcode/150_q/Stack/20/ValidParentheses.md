20. Valid Parentheses

https://leetcode.com/problems/valid-parentheses/description/?envType=study-plan-v2&envId=top-interview-150

level -> easy

Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:

Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
Every close bracket has a corresponding open bracket of the same type.
 

Example 1:

Input: s = "()"
Output: true
Example 2:

Input: s = "()[]{}"
Output: true
Example 3:

Input: s = "(]"
Output: false
 

Constraints:

1 <= s.length <= 104
s consists of parentheses only '()[]{}'.



Solution, pseodocode:

Algorithm -> 
1. Declare an empty stack.
2. Push an opening parenthesis on top of the stack.
3. In case of a closing bracket, check if the stack is empty.
4. If not, pop in a closing parenthesis if the top of the stack contains the corresponding opening parenthesis.
5. If the parentheses are valid,​ then the stack will be empty once the input string finishes.

