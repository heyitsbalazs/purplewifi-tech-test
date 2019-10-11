<?php

namespace App\Contracts;

interface TransformsData
{
    /**
     * @param $data
     *
     * @return mixed
     */
    public static function transform($data);
}
