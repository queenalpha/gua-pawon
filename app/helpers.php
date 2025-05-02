<?php

if (!function_exists('number_format_short')) {
    function number_format_short($n, $precision = 1)
    {
        if ($n < 1000) {
            return $n;
        } elseif ($n < 1000000) {
            return round($n / 1000, $precision) . 'K';
        } elseif ($n < 1000000000) {
            return round($n / 1000000, $precision) . 'M';
        } else {
            return round($n / 1000000000, $precision) . 'B';
        }
    }
}
