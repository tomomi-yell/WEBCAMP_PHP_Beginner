<?php
function fibonacci($n) {
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        echo $a . "\n";
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
}

fibonacci(22); // 最初の22個のフィボナッチ数列を表示
?>
