<?php
//
for($i = 1; $i <= 100; ++$i) {
    if ( ($i % 15) === 0 ) {
        // 数字が「3でも5でも割り切れる」ときは、数字の代わりに Fizz Buzz と出力してください
        echo "Fizz Buzz ";
    } else if ( ($i % 5) === 0 ) {
        // 数字が「5で割り切れる」ときは、数字の代わりに Buzz と出力してください
        echo "Buzz ";
    } else if ( ($i % 3) === 0 ) {
        // 数字が「3で割り切れる」ときは、数字の代わりに Fizz と出力してください
        echo "Fizz ";
    } else {
        // 1から100までの数字を出力してください
        echo "{$i} ";
    }
    echo "\n";
}
echo "\n";