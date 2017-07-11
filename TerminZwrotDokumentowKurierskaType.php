<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class TerminZwrotDokumentowKurierskaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class TerminZwrotDokumentowKurierskaType
{

    const MIEJSKI_DO_3H_DO_5KM = 'MIEJSKI_DO_3H_DO_5KM';
    const MIEJSKI_DO_3H_DO_10KM = 'MIEJSKI_DO_3H_DO_10KM';
    const MIEJSKI_DO_3H_DO_15KM = 'MIEJSKI_DO_3H_DO_15KM';
    const MIEJSKI_DO_3H_POWYZEJ_15KM = 'MIEJSKI_DO_3H_POWYZEJ_15KM';
    const BEZPOSREDNI_DO_20KG = 'BEZPOSREDNI_DO_20KG';
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
            'BEZPOSREDNI_DO_20KG' => 'BEZPOSREDNI_DO_20KG',
            'EKSPRES24' => 'EKSPRES24',
        ];
    }

}