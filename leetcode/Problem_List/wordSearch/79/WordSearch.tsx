function exist(board: string[][], word: string): boolean {
    const rows: number = board.length;
    const cols: number = board[0].length;
    const strLen: number = word.length;

    // const directions: number[][] = [[0,1],[1,1],[1,0],[-1,1],[-1,-1],[1,-1],[0,-1],[-1,0]];
    const directions: number[][] = [[0, 1], [1, 0], [0, -1], [-1, 0]];


    function limits(x: number, y: number): boolean {
        return (x >= 0 && y >= 0 && x < rows && y < cols);
    }

    function searchString(i: number, j: number, target: number, visited: Set<string>): boolean {

        if (target == strLen) {
            return true;
        }

        for (const [x, y] of directions) {
            const newX = i + x;
            const newY = j + y;
            if (limits(newX, newY) && !visited.has(`${newX},${newY}`)
                && board[newX][newY] == word[target]
            ) {
                visited.add(`${newX},${newY}`);

                if (searchString(x + i, y + j, target + 1, visited)) {
                    return true;
                }
                visited.delete(`${newX},${newY}`); //backtracking
            }
        }
        return false;

    }

    for (let i = 0; i < rows; i++) {
        for (let j = 0; j < cols; j++) {
            console.log(word);
            console.log(word[0]);

            if (board[i][j] === word[0]) {
                const visited = new Set<string>();
                visited.add(`${i},${j}`);

                if (searchString(i, j, 1, visited)) {
                    return true;
                }
            }

        }
    }

    return false;

};


/** 
 * Complexity:
Time Complexity: 
𝑂
(
𝑚
×
𝑛
×
4
𝑘
)
O(m×n×4 
k
 ) in the worst case (exponential in word.length).
Space Complexity: 
𝑂
(
𝑘
)
O(k), where k is the word length (due to recursion stack and visited set).
 */