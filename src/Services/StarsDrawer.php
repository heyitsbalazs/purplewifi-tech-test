<?php

require __DIR__ . '/../../vendor/autoload.php';

use Tightenco\Collect\Support\Collection;

final class StarsDrawer
{
    /**
     * @var Collection
     */
    private $stars = [];

    /**
     * StarsDrawer constructor.
     *
     * @param array $stars
     */
    public function __construct(array $stars)
    {
        $this->stars = collect($stars);
    }

    /**
     * @return array
     */
    public function getStarPositions(): array
    {
        return $this->stars->map(function ($star) {
            return [$star['position_x'], $star['position_y']];
        })->toArray();
    }

    /**
     * @return string
     */
    public function drawGrid(): string
    {
        $starPositions = $this->getStarPositions();

        $grid = '';
        $rows = range(
            $this->stars->max('position_y'),
            $this->stars->min('position_y')
        );
        $columns = range(
            $this->stars->max('position_x'),
            $this->stars->min('position_x')
        );

        foreach ($rows as $row) {
            foreach ($columns as $column) {
                $grid .= in_array([$column, $row], $starPositions) ? '<span style="color: red">X</span>' : 'X';
            }
            $grid .= '<br>';
        }

        return $grid;
    }
}
