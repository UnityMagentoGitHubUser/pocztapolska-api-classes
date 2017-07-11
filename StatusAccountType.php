<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class StatusAccountType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class StatusAccountType
{

    const WYLACZONY     = 'WYLACZONY';
    const ZABLOKOWANY   = 'ZABLOKOWANY';
    const ODBLOKOWANY   = 'ODBLOKOWANY';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'WYLACZONY'     => 'WYLACZONY',
            'ZABLOKOWANY'   => 'ZABLOKOWANY',
            'ODBLOKOWANY'   => 'ODBLOKOWANY',
        ];
    }

}