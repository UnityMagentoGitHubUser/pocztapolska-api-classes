<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class OpakowaniePocztowaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class OpakowaniePocztowaType
{

    const PACZKA_DO_POL_KILO    = 'PACZKA_DO_POL_KILO';
    const FIRMOWA_DO_1KG        = 'FIRMOWA_DO_1KG';
    const GABARYT_G1            = 'GABARYT_G1';
    const GABARYT_G2            = 'GABARYT_G2';
    const GABARYT_G3            = 'GABARYT_G3';
    const GABARYT_G4            = 'GABARYT_G4';
    const GABARYT_G5            = 'GABARYT_G5';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'PACZKA_DO_POL_KILO'    => 'PACZKA_DO_POL_KILO',
            'FIRMOWA_DO_1KG'        => 'FIRMOWA_DO_1KG',
            'GABARYT_G1'            => 'GABARYT_G1',
            'GABARYT_G2'            => 'GABARYT_G2',
            'GABARYT_G3'            => 'GABARYT_G3',
            'GABARYT_G4'            => 'GABARYT_G4',
            'GABARYT_G5'            => 'GABARYT_G5',
        ];
    }

}