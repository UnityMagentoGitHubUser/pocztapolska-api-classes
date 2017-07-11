<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class OczekiwanaGodzinaDoreczeniaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class OczekiwanaGodzinaDoreczeniaType
{

    const DO_08_00 = 'DO 08:00';
    const DO_09_00 = 'DO 09:00';
    const DO_12_00 = 'DO 12:00';
    const NA_13_00 = 'NA 13:00';
    const NA_14_00 = 'NA 14:00';
    const NA_15_00 = 'NA 15:00';
    const NA_16_00 = 'NA 16:00';
    const NA_17_00 = 'NA 17:00';
    const NA_18_00 = 'NA 18:00';
    const NA_19_00 = 'NA 19:00';
    const NA_20_00 = 'NA 20:00';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'DO_08_00' => 'DO 08:00',
            'DO_09_00' => 'DO 09:00',
            'DO_12_00' => 'DO 12:00',
            'NA_13_00' => 'NA 13:00',
            'NA_14_00' => 'NA 14:00',
            'NA_15_00' => 'NA 15:00',
            'NA_16_00' => 'NA 16:00',
            'NA_17_00' => 'NA 17:00',
            'NA_18_00' => 'NA 18:00',
            'NA_19_00' => 'NA 19:00',
            'NA_20_00' => 'NA 20:00',
        ];
    }

}