<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class MiejsceOdbioruType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class MiejsceOdbioruType
{

    const NADAWCA       = 'NADAWCA';
    const URZAD_NADANIA = 'URZAD_NADANIA';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'NADAWCA'       => 'NADAWCA',
            'URZAD_NADANIA' => 'URZAD_NADANIA',
        ];
    }

}