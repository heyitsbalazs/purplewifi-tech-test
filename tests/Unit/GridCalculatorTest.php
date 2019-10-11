<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class GridCalculatorTest extends TestCase
{
    /**
     * @dataProvider stars_provider
     */
    public function test_calculate_grid_size($stars)
    {
        $this->assertEquals(
            85136,
            GridCalculator::calculateGridSize($stars)
        );
    }

    public function stars_provider()
    {
        return [
            [
                [
                    [
                        'position_x' => 53366,
                        'position_y' => 42655,
                        'velocity_x' => -5,
                        'velocity_y' => -4,
                    ],
                    [
                        'position_x' => 32082,
                        'position_y' => 42659,
                        'velocity_x' => -3,
                        'velocity_y' => -4,
                    ],
                ],
            ],
        ];
    }
}
