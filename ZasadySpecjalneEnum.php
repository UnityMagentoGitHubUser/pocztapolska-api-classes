<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class ZasadySpecjalneEnum
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class ZasadySpecjalneEnum
{

    const ADMINISTRACYJNA = 'ADMINISTRACYJNA';
    const PODATKOWA = 'PODATKOWA';
    const SADOWA_CYWILNA = 'SADOWA_CYWILNA';
    const SADOWA_KARNA = 'SADOWA_KARNA';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'ADMINISTRACYJNA' => 'ADMINISTRACYJNA',
            'PODATKOWA' => 'PODATKOWA',
            'SADOWA_CYWILNA' => 'SADOWA_CYWILNA',
            'SADOWA_KARNA' => 'SADOWA_KARNA',
        ];
    }
}