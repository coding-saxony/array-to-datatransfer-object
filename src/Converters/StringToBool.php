<?php

namespace CodingSaxony\ArrayToDataTransferObject\Converters;

/**
 * Class StringToBool
 *
 * @package CodingSaxony\ArrayToDataTransferObject\Converters
 */
class StringToBool
{
    /**
     * @param string $value
     *
     * @return bool
     */
    public static function convert(string $value): bool
    {
        return (bool) $value;
    }
}