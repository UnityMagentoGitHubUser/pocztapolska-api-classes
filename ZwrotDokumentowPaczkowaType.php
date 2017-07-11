<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class ZwrotDokumentowPaczkowaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class ZwrotDokumentowPaczkowaType
{

    const EKSPRES24 = 'EKSPRES24';
    const PACZKA_EKSTRA_24 = 'PACZKA_EKSTRA_24';
    const PACZKA_24 = 'PACZKA_24';
    const PACZKA_48 = 'PACZKA_48';
    const LIST_ZWYKLY_PRIORYTETOWY = 'LIST_ZWYKLY_PRIORYTETOWY';
    const LIST_ZWYKLY_EKONOMICZNY = 'LIST_ZWYKLY_EKONOMICZNY';
    const LIST_POLECONY_PRIORYTETOWY = 'LIST_POLECONY_PRIORYTETOWY';
    const LIST_POLECONY_EKONOMICZNY = 'LIST_POLECONY_EKONOMICZNY';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'EKSPRES24' => 'EKSPRES24',
            'PACZKA_EKSTRA_24' => 'PACZKA_EKSTRA_24',
            'PACZKA_24' => 'PACZKA_24',
            'PACZKA_48' => 'PACZKA_48',
            'LIST_ZWYKLY_PRIORYTETOWY' => 'LIST_ZWYKLY_PRIORYTETOWY',
            'LIST_ZWYKLY_EKONOMICZNY' => 'LIST_ZWYKLY_EKONOMICZNY',
            'LIST_POLECONY_PRIORYTETOWY' => 'LIST_POLECONY_PRIORYTETOWY',
            'LIST_POLECONY_EKONOMICZNY' => 'LIST_POLECONY_EKONOMICZNY',
        ];
    }

}