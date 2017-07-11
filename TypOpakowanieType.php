<?php
namespace PocztaPolska\ApiClasses;

/**
 * Class TypOpakowanieType
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 */
class TypOpakowanieType
{

    const KL1 = 'KL1';
    const KL2 = 'KL2';
    const KL3 = 'KL3';
    const S21 = 'S21';
    const S22 = 'S22';
    const S23 = 'S23';
    const P31 = 'P31';
    const P32 = 'P32';
    const P33 = 'P33';
    const SP41 = 'SP41';
    const SP42 = 'SP42';
    const WKL51 = 'WKL51';
    const K1 = 'K1';
    const K2 = 'K2';
    const K3 = 'K3';
    const P = 'P';
    const W = 'W';

    /**
     * @return array
     */
    public function getMap()
    {
        return [
            'KL1' => 'KL1',
            'KL2' => 'KL2',
            'KL3' => 'KL3',
            'S21' => 'S21',
            'S22' => 'S22',
            'S23' => 'S23',
            'P31' => 'P31',
            'P32' => 'P32',
            'P33' => 'P33',
            'SP41' => 'SP41',
            'SP42' => 'SP42',
            'WKL51' => 'WKL51',
            'K1' => 'K1',
            'K2' => 'K2',
            'K3' => 'K3',
            'P' => 'P',
            'W' => 'W',
        ];
    }

}