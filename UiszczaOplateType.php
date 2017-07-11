<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class UiszczaOplateType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class UiszczaOplateType
{

    const NADAWCA = 'NADAWCA';
    const ADRESAT = 'ADRESAT';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'NADAWCA' => 'NADAWCA',
            'ADRESAT' => 'ADRESAT',
        ];
    }

}