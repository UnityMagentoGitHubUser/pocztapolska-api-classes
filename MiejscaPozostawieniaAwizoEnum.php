<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class MiejscaPozostawieniaAwizoEnum
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class MiejscaPozostawieniaAwizoEnum
{

    const SKRZYNKA_ADRESATA         = 'SKRZYNKA_ADRESATA';
    const DRZWI_MIESZKANIA          = 'DRZWI_MIESZKANIA';
    const DRZWI_BIURA               = 'DRZWI_BIURA';
    const DRZWI_INNE                = 'DRZWI_INNE';
    const PRZY_WEJSCIU_NA_POSESJE   = 'PRZY_WEJSCIU_NA_POSESJE';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'SKRZYNKA_ADRESATA'         => 'SKRZYNKA_ADRESATA',
            'DRZWI_MIESZKANIA'          => 'DRZWI_MIESZKANIA',
            'DRZWI_BIURA'               => 'DRZWI_BIURA',
            'DRZWI_INNE'                => 'DRZWI_INNE',
            'PRZY_WEJSCIU_NA_POSESJE'   => 'PRZY_WEJSCIU_NA_POSESJE',
        ];
    }

}