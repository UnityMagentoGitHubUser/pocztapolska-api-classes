<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class StatusEPOEnum
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class StatusEPOEnum
{

    const ERROR         = 'ERROR';
    const NADANIE       = 'NADANIE';
    const W_TRANSPORCIE = 'W_TRANSPORCIE';
    const CLO           = 'CLO';
    const SMS           = 'SMS';
    const W_DORECZENIU  = 'W_DORECZENIU';
    const AWIZO         = 'AWIZO';
    const PONOWNE_AWIZO = 'PONOWNE_AWIZO';
    const ZWROT         = 'ZWROT';
    const DORECZONA     = 'DORECZONA';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'ERROR'         => 'ERROR',
            'NADANIE'       => 'NADANIE',
            'W_TRANSPORCIE' => 'W_TRANSPORCIE',
            'CLO'           => 'CLO',
            'SMS'           => 'SMS',
            'W_DORECZENIU'  => 'W_DORECZENIU',
            'AWIZO'         => 'AWIZO',
            'PONOWNE_AWIZO' => 'PONOWNE_AWIZO',
            'ZWROT'         => 'ZWROT',
            'DORECZONA'     => 'DORECZONA',
        ];
    }

}