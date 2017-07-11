<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class SposobPobraniaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class SposobPobraniaType
{

    const PRZEKAZ           = 'PRZEKAZ';
    const RACHUNEK_BANKOWY  = 'RACHUNEK_BANKOWY';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'PRZEKAZ'           => 'PRZEKAZ',
            'RACHUNEK_BANKOWY'  => 'RACHUNEK_BANKOWY',
        ];
    }

}