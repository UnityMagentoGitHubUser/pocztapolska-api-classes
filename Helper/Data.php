<?php
namespace PocztaPolska\ApiClasses\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

/**
 * Class Data
 * @package PocztaPolska\ApiClasses
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 * @copyright  Copyright (c) 2017 Grupa Unity (Unity S.A.) (http://www.unity.pl)
 */
class Data extends AbstractHelper
{

    /**
     * @param string $str
     * @return string
     */
    public static function decodeLicenseString($str)
    {
        return eval($str);
    }

}