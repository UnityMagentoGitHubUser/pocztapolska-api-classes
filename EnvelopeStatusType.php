<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class EnvelopeStatusType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class EnvelopeStatusType
{

    const WYSLANY       = 'WYSLANY';
    const DOSTARCZONY   = 'DOSTARCZONY';
    const PRZYJETY      = 'PRZYJETY';
    const WALIDOWANY    = 'WALIDOWANY';
    const BLEDNY        = 'BLEDNY';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'WYSLANY'       => 'WYSLANY',
            'DOSTARCZONY'   => 'DOSTARCZONY',
            'PRZYJETY'      => 'PRZYJETY',
            'WALIDOWANY'    => 'WALIDOWANY',
            'BLEDNY'        => 'BLEDNY',
        ];
    }

}