<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class RodzajPaletyType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class RodzajPaletyType
{

    const EUR       = 'EUR';
    const POLPALETA = 'POLPALETA';
    const INNA      = 'INNA';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'EUR'       => 'EUR',
            'POLPALETA' => 'POLPALETA',
            'INNA'      => 'INNA',
        ];
    }

}