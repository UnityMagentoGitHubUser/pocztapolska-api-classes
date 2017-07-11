<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class SposobDoreczeniaPotwierdzeniaType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class SposobDoreczeniaPotwierdzeniaType
{

    const TELEFON   = 'TELEFON';
    const TELEFAX   = 'TELEFAX';
    const SMS       = 'SMS';
    const EMAIL     = 'EMAIL';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'TELEFON'   => 'TELEFON',
            'TELEFAX'   => 'TELEFAX',
            'SMS'       => 'SMS',
            'EMAIL'     => 'EMAIL',
        ];
    }

}