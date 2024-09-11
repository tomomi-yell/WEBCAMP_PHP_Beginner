<?php
//
try {
    // 例外を発生させる
    $obj = new SplFileObject('dummy');

    // その後の処理（動かないことを確認するため）
    echo "例外が起きた後の処理。ここは通る? \n";
} catch(\Throwable $e) {
    //
    echo "例外が発生したらここを通る \n";
    var_dump($e->getMessage());
}
//
echo "fin. \n";