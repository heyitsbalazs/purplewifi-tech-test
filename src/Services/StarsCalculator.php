<?php

require __DIR__ . '/../../vendor/autoload.php';

use Tightenco\Collect\Support\Collection;

final class StarsCalculator
{
    /**
     * @var Collection
     */
    private $stars = [];

    /**
     * @var int
     */
    private $seconds;

    /**
     * StarsCalculator constructor.
     *
     * @param array $stars
     * @param int   $seconds
     */
    public function __construct(array $stars, int $seconds)
    {
        $this->stars = collect($stars);
        $this->seconds = $seconds;
    }

    /**
     * @return array
     */
    public function calculateNewPositions(): array
    {
        $seconds = $this->seconds;
        return $this->stars->map(function ($star) use ($seconds) {
            $star['position_x'] += ($star['velocity_x'] * $seconds);
            $star['position_y'] += ($star['velocity_y'] * $seconds);
            return $star;
        })->toArray();
    }

    /**
     * @return Collection
     */
    public function getStars(): Collection
    {
        return $this->stars;
    }

    /**
     * @param array $stars
     *
     * @return StarsCalculator
     */
    public function setStars($stars)
    {
        $this->stars = collect($stars);
        return $this;
    }

    /**
     * @return int
     */
    public function getSeconds(): int
    {
        return $this->seconds;
    }

    /**
     * @param int $seconds
     *
     * @return StarsCalculator
     */
    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;
        return $this;
    }
}
