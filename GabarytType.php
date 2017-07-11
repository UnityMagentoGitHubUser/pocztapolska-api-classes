<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class GabarytType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class GabarytType
{

    const GABARYT_A = 'GABARYT_A';
    const GABARYT_B = 'GABARYT_B';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'GABARYT_A' => 'GABARYT_A',
            'GABARYT_B' => 'GABARYT_B',
        ];
    }

}