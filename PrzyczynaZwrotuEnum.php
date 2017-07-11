<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class PrzyczynaZwrotuEnum
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class PrzyczynaZwrotuEnum
{

    const ODMOWA                    = 'ODMOWA';
    const ADRESAT_ZMARL             = 'ADRESAT_ZMARL';
    const ADRESAT_NIEZNANY          = 'ADRESAT_NIEZNANY';
    const ADRESAT_WYPROWADZIL_SIE   = 'ADRESAT_WYPROWADZIL_SIE';
    const ADRESAT_NIE_PODJAL        = 'ADRESAT_NIE_PODJAL';
    const INNA                      = 'INNA';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'ODMOWA'                    => 'ODMOWA',
            'ADRESAT_ZMARL'             => 'ADRESAT_ZMARL',
            'ADRESAT_NIEZNANY'          => 'ADRESAT_NIEZNANY',
            'ADRESAT_WYPROWADZIL_SIE'   => 'ADRESAT_WYPROWADZIL_SIE',
            'ADRESAT_NIE_PODJAL'        => 'ADRESAT_NIE_PODJAL',
            'INNA'                      => 'INNA',
        ];
    }

}