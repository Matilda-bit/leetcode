36. Valid Sudoku

https://leetcode.com/problems/valid-sudoku/description/

level -> Medium

Determine if a 9 x 9 Sudoku board is valid. Only the filled cells need to be validated according to the following rules:

Each row must contain the digits 1-9 without repetition.
Each column must contain the digits 1-9 without repetition.
Each of the nine 3 x 3 sub-boxes of the grid must contain the digits 1-9 without repetition.
Note:

A Sudoku board (partially filled) could be valid but is not necessarily solvable.
Only the filled cells need to be validated according to the mentioned rules.
 

Example 1:


Input: board = 
[["5","3",".",".","7",".",".",".","."]
,["6",".",".","1","9","5",".",".","."]
,[".","9","8",".",".",".",".","6","."]
,["8",".",".",".","6",".",".",".","3"]
,["4",".",".","8",".","3",".",".","1"]
,["7",".",".",".","2",".",".",".","6"]
,[".","6",".",".",".",".","2","8","."]
,[".",".",".","4","1","9",".",".","5"]
,[".",".",".",".","8",".",".","7","9"]]
Output: true
Example 2:

Input: board = 
[["8","3",".",".","7",".",".",".","."]
,["6",".",".","1","9","5",".",".","."]
,[".","9","8",".",".",".",".","6","."]
,["8",".",".",".","6",".",".",".","3"]
,["4",".",".","8",".","3",".",".","1"]
,["7",".",".",".","2",".",".",".","6"]
,[".","6",".",".",".",".","2","8","."]
,[".",".",".","4","1","9",".",".","5"]
,[".",".",".",".","8",".",".","7","9"]]
Output: false
Explanation: Same as Example 1, except with the 5 in the top left corner being modified to 8. Since there are two 8's in the top left 3x3 sub-box, it is invalid.
 

Constraints:

board.length == 9
board[i].length == 9
board[i][j] is a digit 1-9 or '.'.






+==============================++
Intuition

Depth-First Search (dfs).

Approach

The DFS explores adjacent cells and updates the board accordingly. The countAdjacentMines function calculates the number of adjacent mines for a given cell.

Complexity

Time complexity:
The primary operation in the updateBoard function is the Depth-First Search (DFS). In the worst case, the DFS may visit all cells on the board. The DFS function is called for each empty cell (marked as 'E').

For each empty cell, the DFS explores its neighbors, and the exploration continues until a boundary or a cell with an adjacent mine is reached. In the worst case, all cells need to be visited once. Therefore, the time complexity of the solution is O(N), where N is the total number of cells on the board.

Space complexity:
The space complexity is mainly determined by the call stack during the DFS traversal. In the worst case, the call stack could go as deep as the total number of cells on the board. Therefore, the space complexity is O(N).

Additionally, the space complexity is influenced by the input parameters and variables. The vectors array is a constant-size array, so it does not contribute significantly to the space complexity. The mineCount variable and other local variables in the DFS function also have constant space requirements.

In conclusion, the overall space complexity is dominated by the call stack during the DFS traversal and is O(N), where N is the total number of cells on the board.