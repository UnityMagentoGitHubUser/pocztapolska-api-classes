<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class CzynnoscUpustowaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class CzynnoscUpustowaType
{

    const POSORTOWANA = 'POSORTOWANA';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'POSORTOWANA' => 'POSORTOWANA'
        ];
    }

}