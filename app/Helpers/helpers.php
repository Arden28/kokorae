<?php


if (!function_exists('format_currency')) {
    function format_currency($value, $format = true) {
        if (!$format) {
            return $value;
        }

        // $settings = settings();
        $position = 'suffix';
        $symbol = 'FCFA';
        $decimal_separator = ',';
        $thousand_separator = '.';

        if ($position == 'prefix') {
            $formatted_value = $symbol . number_format((float) $value, 2, $decimal_separator, $thousand_separator);
        } else {
            $formatted_value = number_format((float) $value, 2, $decimal_separator, $thousand_separator) .' '. $symbol;
        }

        return $formatted_value;
    }
}

if (!function_exists('convertToInt')) {
    function convertToInt($value){
        // Assuming $cart->total() returns a string like "12.500,00"
        $totalString = $value;

        // Remove commas and dots from the string and keep only digits
        $totalWithoutCommasAndDots = str_replace([',', '.'], '', $totalString);

        // Convert the resulting string to an integer
        $value = (int) $totalWithoutCommasAndDots / 100;

        return $value;
    }
}
