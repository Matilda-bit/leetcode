<?php

function checkSum(array $nums, int $target) {
    return bfs($nums, $target, 0, 0);
}

function bfs(array $nums = null, int $target, int $index, int $sum) {

    if(count($nums)  === $index){
        return $sum === $target;
    }
    $num = $nums[$index];
    if(bfs($nums, $target, $index + 1, ($sum + $num))){
        return true;
    }
    if ($index !== 0){
        if(bfs($nums, $target, $index + 1, ($sum - $num))){
            return true;
        }
    }

    return false;
}

$check = checkSum([0,2,5,7,8],22);

if($check) {
    echo "true\n";
} else {
    echo "false\n";
}

// N numbers 
// 2
// 2 + 5 = 7, 2 - 5 = -3               2
// 7 + 7 = 14, -3 - 7 = -10
// 2 ^ (N-1)


// 2^N

//time complexity O(2^N)
//space complexity O(n)