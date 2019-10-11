<?php

require __DIR__ . '/../../vendor/autoload.php';

final class GridCalculator
{
    /**
     * @param $stars
     *
     * @return float|int
     */
    public static function calculateGridSize($stars)
    {
        $stars = collect($stars);

        return
            ($stars->max('position_x') - $stars->min('position_x')) *
            ($stars->max('position_y') - $stars->min('position_y'));
    }
}
