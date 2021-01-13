<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

function xrange(int $start, int $limit, int $steps = 1): Generator
{
    if ($steps < 1) {
        throw new LogicException(sprintf(
            'Steps need to be greater then zero, but "%d" was given',
            $steps
        ));
    }

    if ($start > $limit) {
        for ($i = $start; $i >= $limit; $i-= $steps) {
            yield $i;
        }
    }
    else {
        for ($i = $start; $i <= $limit; $i+= $steps) {
            yield $i;
        }
    }
}
