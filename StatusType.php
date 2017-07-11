<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class StatusType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class StatusType
{

    const NIEPOTWIERDZONA = 'NIEPOTWIERDZONA';
    const POTWIERDZONA = 'POTWIERDZONA';
    const NOWA = 'NOWA';
    const BRAK = 'BRAK';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'NIEPOTWIERDZONA'   => 'NIEPOTWIERDZONA',
            'POTWIERDZONA'      => 'POTWIERDZONA',
            'NOWA'              => 'NOWA',
            'BRAK'              => 'BRAK',
        ];
    }

}