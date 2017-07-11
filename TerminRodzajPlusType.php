<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class TerminRodzajPlusType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class TerminRodzajPlusType
{

    const PORANEK = 'PORANEK';
    const POLUDNIE = 'POLUDNIE';
    const STANDARD = 'STANDARD';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'PORANEK' => 'PORANEK',
            'POLUDNIE' => 'POLUDNIE',
            'STANDARD' => 'STANDARD',
        ];
    }

}