<?php
/**
 * Created by PhpStorm.
 * User: niunea
 * Date: 2/4/15
 * Time: 7:18 PM
 */
function doit($a, $b) {
    return ($b == 0) ? $a : doit($b, $a % $b);
}
echo doit(1071, 1029); // 21

echo die('torba');