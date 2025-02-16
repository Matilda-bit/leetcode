function findWords(board: string[][], words: string[]): string[] {

    const rows: number = board.length;
    const cols: number = board[0].length;
    const directions: number[][] = [[-1, 0], [0, 1], [1, 0], [0, -1]];

    let result: string[] = [];

    function limits(x: number, y: number): boolean {
        return (x < rows && y < cols && x >= 0 && y >= 0);
    }

    function searchString(i: number, j: number, target: number, visited: Set<string>, word: string): boolean {

        if (target === word.length) {
            result.push(word);
            return true;

        }

        for (const [x, y] of directions) {
            const newX = x + i;
            const newY = y + j;

            if (limits(newX, newY) && !visited.has(`${newX},${newY}`)
                && board[newX][newY] === word[target]) {
                visited.add(`${newX},${newY}`);
                if (searchString(newX, newY, target + 1, visited, word)) {
                    return true;
                }

                visited.delete(`${newX},${newY}`);

            }

        }

        return false;
    }

    for (const word of words) {
        let firstChar = word[0];
        let found = false;

        for (let i = 0; i < rows && !found; i++) {
            for (let j = 0; j < cols && !found; j++) {

                if (board[i][j] === firstChar) {
                    const visited = new Set<string>();
                    visited.add(`${i},${j}`);
                    if (searchString(i, j, 1, visited, word)) {
                        found = true;
                    }
                }
            }
        }


    }

    return result;

};