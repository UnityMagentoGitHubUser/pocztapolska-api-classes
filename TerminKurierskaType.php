<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class TerminKurierskaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class TerminKurierskaType
{

    const MIEJSKI_DO_3H_DO_5KM = 'MIEJSKI_DO_3H_DO_5KM';
    const MIEJSKI_DO_3H_DO_10KM = 'MIEJSKI_DO_3H_DO_10KM';
    const MIEJSKI_DO_3H_DO_15KM = 'MIEJSKI_DO_3H_DO_15KM';
    const MIEJSKI_DO_3H_POWYZEJ_15KM = 'MIEJSKI_DO_3H_POWYZEJ_15KM';
    const MIEJSKI_DO_4H_DO_10KM = 'MIEJSKI_DO_4H_DO_10KM';
    const MIEJSKI_DO_4H_DO_15KM = 'MIEJSKI_DO_4H_DO_15KM';
    const MIEJSKI_DO_4H_DO_20KM = 'MIEJSKI_DO_4H_DO_20KM';
    const MIEJSKI_DO_4H_DO_30KM = 'MIEJSKI_DO_4H_DO_30KM';
    const MIEJSKI_DO_4H_DO_40KM = 'MIEJSKI_DO_4H_DO_40KM';
    const KRAJOWY = 'KRAJOWY';
    const BEZPOSREDNI_DO_20KG = 'BEZPOSREDNI_DO_20KG';
    const BEZPOSREDNI_OD_20KG_DO_30KG = 'BEZPOSREDNI_OD_20KG_DO_30KG';
    const BEZPOSREDNI_OD_30KG_DO_100KG = 'BEZPOSREDNI_OD_30KG_DO_100KG';
    const EKSPRES24 = 'EKSPRES24';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'MIEJSKI_DO_3H_DO_5KM' => 'MIEJSKI_DO_3H_DO_5KM',
            'MIEJSKI_DO_3H_DO_10KM' => 'MIEJSKI_DO_3H_DO_10KM',
            'MIEJSKI_DO_3H_DO_15KM' => 'MIEJSKI_DO_3H_DO_15KM',
            'MIEJSKI_DO_3H_POWYZEJ_15KM' => 'MIEJSKI_DO_3H_POWYZEJ_15KM',
            'MIEJSKI_DO_4H_DO_10KM' => 'MIEJSKI_DO_4H_DO_10KM',
            'MIEJSKI_DO_4H_DO_15KM' => 'MIEJSKI_DO_4H_DO_15KM',
            'MIEJSKI_DO_4H_DO_20KM' => 'MIEJSKI_DO_4H_DO_20KM',
            'MIEJSKI_DO_4H_DO_30KM' => 'MIEJSKI_DO_4H_DO_30KM',
            'MIEJSKI_DO_4H_DO_40KM' => 'MIEJSKI_DO_4H_DO_40KM',
            'KRAJOWY' => 'KRAJOWY',
            'BEZPOSREDNI_DO_20KG' => 'BEZPOSREDNI_DO_20KG',
            'BEZPOSREDNI_OD_20KG_DO_30KG' => 'BEZPOSREDNI_OD_20KG_DO_30KG',
            'BEZPOSREDNI_OD_30KG_DO_100KG' => 'BEZPOSREDNI_OD_30KG_DO_100KG',
            'EKSPRES24' => 'EKSPRES24',
        ];
    }

}