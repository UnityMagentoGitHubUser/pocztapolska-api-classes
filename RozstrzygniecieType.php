<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class RozstrzygniecieType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class RozstrzygniecieType
{

    const UZASADNIONA       = 'UZASADNIONA';
    const NIEUZASADNIONA    = 'NIEUZASADNIONA';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'UZASADNIONA'       => 'UZASADNIONA',
            'NIEUZASADNIONA'    => 'NIEUZASADNIONA',
        ];
    }

}