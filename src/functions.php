<?php

use Doetech\Dumper;

/**
 * This function can read all parameters.
 * Then execute "Dumper->dump()"
 *
 *
 * Created by PhpStorm.
 * User: YangLongFei
 * Date: 2017/8/31
 * Time: 15:48
 * @param array $args
 */
function diedump(...$args)
{
    foreach ($args as $x) {
        (new Dumper())->dump($x);
    }
}
