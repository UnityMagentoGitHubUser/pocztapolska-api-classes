<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class SposobZwrotuType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class SposobZwrotuType
{

    const LADOWO_MORSKA = 'LADOWO_MORSKA';
    const LOTNICZA      = 'LOTNICZA';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'LADOWO_MORSKA' => 'LADOWO_MORSKA',
            'LOTNICZA'      => 'LOTNICZA',
        ];
    }

}