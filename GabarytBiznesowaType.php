<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class GabarytBiznesowaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class GabarytBiznesowaType
{

    const XS    = 'XS';
    const S     = 'S';
    const M     = 'M';
    const L     = 'L';
    const XL    = 'XL';
    const XXL   = 'XXL';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'XS'    => 'XS',
            'S'     => 'S',
            'M'     => 'M',
            'L'     => 'L',
            'XL'    => 'XL',
            'XXL'   => 'XXL',
        ];
    }

}