<?php

use App\Contracts\TransformsData;

class InputStringToArray implements TransformsData
{
    /**
     * @param $data
     *
     * @return array|mixed
     */
    public static function transform($data)
    {
        $result = [];

        foreach (explode(PHP_EOL, $data) as $row) {
            $matches = [];
            preg_match('/position=<(.*?)> velocity=<(.*?)>/', $row, $matches);

            $position = explode(',', $matches[1]);
            $velocity = explode(',', $matches[2]);

            array_push($result, [
                'position_x' => (int)$position[0],
                'position_y' => (int)$position[1],
                'velocity_x' => (int)$velocity[0],
                'velocity_y' => (int)$velocity[1],
            ]);
        }

        return $result;
    }
}