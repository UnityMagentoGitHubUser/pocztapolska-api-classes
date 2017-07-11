<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class TerminPaczkowaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class TerminPaczkowaType
{

    const PACZKA_24 = 'PACZKA_24';
    const PACZKA_48 = 'PACZKA_48';
    const PACZKA_EKSTRA_24 = 'PACZKA_EKSTRA_24';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'PACZKA_24' => 'PACZKA_24',
            'PACZKA_48' => 'PACZKA_48',
            'PACZKA_EKSTRA_24' => 'PACZKA_EKSTRA_24',
        ];
    }

}