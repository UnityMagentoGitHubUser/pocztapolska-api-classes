<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class OpakowanieKurierskaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class OpakowanieKurierskaType
{

    const FIRMOWA_DO_1KG = 'FIRMOWA_DO_1KG';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'FIRMOWA_DO_1KG' => 'FIRMOWA_DO_1KG',
        ];
    }

}