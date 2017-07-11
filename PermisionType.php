<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class PermisionType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class PermisionType
{

    const MANAGE_USERS              = 'MANAGE_USERS';
    const TRANSMIT                  = 'TRANSMIT';
    const MANAGE_PROFILES           = 'MANAGE_PROFILES';
    const MANAGE_ORGANIZATION_UNIT  = 'MANAGE_ORGANIZATION_UNIT';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'MANAGE_USERS'              => 'MANAGE_USERS',
            'TRANSMIT'                  => 'TRANSMIT',
            'MANAGE_PROFILES'           => 'MANAGE_PROFILES',
            'MANAGE_ORGANIZATION_UNIT'  => 'MANAGE_ORGANIZATION_UNIT',
        ];
    }

}