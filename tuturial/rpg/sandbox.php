<?php

declare(strict_types=1);

if (true) {
    echo "true";
} else {
    echo "not true";
}

$count = 0;
$flag = false;
while ($flag) {
    echo "hello";
    $count += 1;
    if ($count == 10){
        breakl;
    }
}