<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class PodmiotDoreczeniaEnum
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class PodmiotDoreczeniaEnum
{

    const ADRESAT               = 'ADRESAT';
    const PELNOLETNI_DOMOWNIK   = 'PELNOLETNI_DOMOWNIK';
    const SASIAD                = 'SASIAD';
    const DOZORCA_DOMU          = 'DOZORCA_DOMU';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'ADRESAT'               => 'ADRESAT',
            'PELNOLETNI_DOMOWNIK'   => 'PELNOLETNI_DOMOWNIK',
            'SASIAD'                => 'SASIAD',
            'DOZORCA_DOMU'          => 'DOZORCA_DOMU',
        ];
    }

}