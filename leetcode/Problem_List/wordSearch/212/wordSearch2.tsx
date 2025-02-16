class CustomTreeNode {
    children: Record<string, CustomTreeNode> = {};
    word: string | null = null; // Store word at the end of a path
}

class Tree {
    root: CustomTreeNode;
    
    constructor() {
        this.root = new CustomTreeNode();
    }

    insert(word: string): void {
        let node = this.root;
        for (const char of word) {
            if (!node.children[char]) {
                node.children[char] = new CustomTreeNode();
            }
            node = node.children[char];
        }
        node.word = word; // Mark the end of the word
    }
}

function findWords1(board: string[][], words: string[]): string[] {
        const tree = new Tree();
        for (const word of words) {
            tree.insert(word);
        }

        const rows = board.length;
        const cols = board[0].length;
        const foundWords = new Set<string>();

        const dfs = (node: CustomTreeNode, r: number, c: number) => {
            const char = board[r][c];
            if (!node.children[char]) return;

            const nextNode = node.children[char];
            if (nextNode.word) {
                foundWords.add(nextNode.word);
                nextNode.word = null; // Avoid duplicate searches
            }

            board[r][c] = "#"; // Mark cell as visited

            // Explore all 4 directions
            const directions = [
                [-1, 0], [1, 0], [0, -1], [0, 1]
            ];
            for (const [dr, dc] of directions) {
                const nr = r + dr, nc = c + dc;
                if (nr >= 0 && nr < rows && nc >= 0 && nc < cols && board[nr][nc] !== "#") {
                    dfs(nextNode, nr, nc);
                }
            }

            board[r][c] = char; // Restore the cell after DFS
        };

        // Start DFS from each board cell
        for (let r = 0; r < rows; r++) {
            for (let c = 0; c < cols; c++) {
                dfs(tree.root, r, c);
            }
        }

        return Array.from(foundWords);
    }
