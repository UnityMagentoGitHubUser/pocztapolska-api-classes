<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class SposobNadaniaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class SposobNadaniaType
{

    const WERYFIKACJA_WEZEL_DOCELOWY = 'WERYFIKACJA_WEZEL_DOCELOWY';
    const WERYFIKACJA_WEZEL_NADAWCZY = 'WERYFIKACJA_WEZEL_NADAWCZY';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'WERYFIKACJA_WEZEL_DOCELOWY' => 'WERYFIKACJA_WEZEL_DOCELOWY',
            'WERYFIKACJA_WEZEL_NADAWCZY' => 'WERYFIKACJA_WEZEL_NADAWCZY',
        ];
    }

}