<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class ESposobPowiadomieniaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class ESposobPowiadomieniaType
{

    const SMS   = 'SMS';
    const EMAIL = 'EMAIL';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'SMS'   => 'SMS',
            'EMAIL' => 'EMAIL',
        ];
    }

}