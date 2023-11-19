<?php

if (!function_exists('calculateSalePercentage')) {
    function calculateSalePercentage($price, $salePrice): float
    {
        return round((($price - $salePrice) / $price) * 100);
    }
}
