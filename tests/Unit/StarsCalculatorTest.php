<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class StarsCalculatorTest extends TestCase
{
    /**
     * @dataProvider stars_provider
     */
    public function test_calculate_grid_size($stars)
    {
        $expectedNewStars = [
            [
                'position_x' => 53361,
                'position_y' => 42651,
                'velocity_x' => -5,
                'velocity_y' => -4,
            ],
            [
                'position_x' => 32079,
                'position_y' => 42655,
                'velocity_x' => -3,
                'velocity_y' => -4,
            ],
        ];

        $this->assertEquals(
            $expectedNewStars,
            (new StarsCalculator($stars, 1))->calculateNewPositions()
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
