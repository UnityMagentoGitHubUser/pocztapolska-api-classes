<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class KategoriaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class KategoriaType
{

    const EKONOMICZNA  = 'EKONOMICZNA';
    const PRIORYTETOWA = 'PRIORYTETOWA';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'EKONOMICZNA'  => 'EKONOMICZNA',
            'PRIORYTETOWA' => 'PRIORYTETOWA',
        ];
    }

}