<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class TerminZwrotDokumentowPaczkowaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class TerminZwrotDokumentowPaczkowaType
{

    const PACZKA_24 = 'PACZKA_24';
    const PACZKA_48 = 'PACZKA_48';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'PACZKA_24' => 'PACZKA_24',
            'PACZKA_48' => 'PACZKA_48',
        ];
    }

}