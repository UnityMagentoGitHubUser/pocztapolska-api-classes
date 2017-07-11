<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class EMSTypOpakowaniaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class EMSTypOpakowaniaType
{

    const ZWYKLY        = 'ZWYKLY';
    const DOKUMENT_PACK = 'DOKUMENT_PACK';
    const KILO_PACK     = 'KILO_PACK';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'ZWYKLY'        => 'ZWYKLY',
            'DOKUMENT_PACK' => 'DOKUMENT_PACK',
            'KILO_PACK'     => 'KILO_PACK',
        ];
    }

}