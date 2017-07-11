<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class SposobPrzekazaniaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class SposobPrzekazaniaType
{

    const LIST_ZWYKLY_PRIOTYTET = 'LIST_ZWYKLY_PRIOTYTET';
    const POCZTEX               = 'POCZTEX';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'LIST_ZWYKLY_PRIOTYTET' => 'LIST_ZWYKLY_PRIOTYTET',
            'POCZTEX'               => 'POCZTEX',
        ];
    }

}