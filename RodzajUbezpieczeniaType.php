<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class RodzajUbezpieczeniaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class RodzajUbezpieczeniaType
{

    const STANDARD = 'STANDARD';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'STANDARD' => 'STANDARD',
        ];
    }

}