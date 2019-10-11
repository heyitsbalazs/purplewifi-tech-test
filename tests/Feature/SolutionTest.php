<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider raw_stars_provider
     */
    public function test_solution($rawStars)
    {
        // 1. Transform input file to array
        $stars = InputStringToArray::transform($rawStars);

        $this->assertIsArray($stars);

        // 2. Move the stars
        $starsAligned = (new StarsCalculator($stars, 10634))->calculateNewPositions();

        $this->assertIsArray($starsAligned);

        // 3. Calculate grid size
        $gridSize = GridCalculator::calculateGridSize($starsAligned);

        $expectedGridSize = 549;

        $this->assertEquals($expectedGridSize, $gridSize);
    }

    public function raw_stars_provider()
    {
        $inputFileOne = file_get_contents(__DIR__ . '/../../data/input.txt');

        return [
            [
                $inputFileOne,
            ],
        ];
    }
}
