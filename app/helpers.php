<?php

declare(strict_types=1);

// format the amount to a dollar amount
function formatDollarAmount(float $amount): string
{
    $isNegative = $amount < 0;

    return ($isNegative ? '-' : '') . '$' . number_format(abs($amount), 2);
}

// format the date to a more readable format
function formatDate(string $date): string
{
    return date('M j, Y', strtotime($date));
}