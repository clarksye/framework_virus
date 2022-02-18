<?php

namespace VIRUS\Framework\Support;


class Env
{

    public static function env(string $search): string
    {
        $lines = file(__DIR__.'/.env');
        foreach ($lines as $line) {
            // explode the line into an array
            $values = explode('=', $line);
            // trim the whitspace from the value
            if (trim($values[0]) == $search) {
                array_shift($values);
                return trim(implode('=', $values));
                // exit the foreach if we found the needle
                break;
            }
        }
    }
}
