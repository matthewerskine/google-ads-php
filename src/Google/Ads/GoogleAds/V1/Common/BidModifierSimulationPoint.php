<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/simulation.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Projected metrics for a specific bid modifier amount.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.BidModifierSimulationPoint</code>
 */
class BidModifierSimulationPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The simulated bid modifier upon which projected metrics are based.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 1;</code>
     */
    private $bid_modifier = null;
    /**
     * Projected number of biddable conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue biddable_conversions = 2;</code>
     */
    private $biddable_conversions = null;
    /**
     * Projected total value of biddable conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue biddable_conversions_value = 3;</code>
     */
    private $biddable_conversions_value = null;
    /**
     * Projected number of clicks.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value clicks = 4;</code>
     */
    private $clicks = null;
    /**
     * Projected cost in micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 5;</code>
     */
    private $cost_micros = null;
    /**
     * Projected number of impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value impressions = 6;</code>
     */
    private $impressions = null;
    /**
     * Projected number of top slot impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value top_slot_impressions = 7;</code>
     */
    private $top_slot_impressions = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\DoubleValue $bid_modifier
     *           The simulated bid modifier upon which projected metrics are based.
     *     @type \Google\Protobuf\DoubleValue $biddable_conversions
     *           Projected number of biddable conversions.
     *     @type \Google\Protobuf\DoubleValue $biddable_conversions_value
     *           Projected total value of biddable conversions.
     *     @type \Google\Protobuf\Int64Value $clicks
     *           Projected number of clicks.
     *     @type \Google\Protobuf\Int64Value $cost_micros
     *           Projected cost in micros.
     *     @type \Google\Protobuf\Int64Value $impressions
     *           Projected number of impressions.
     *     @type \Google\Protobuf\Int64Value $top_slot_impressions
     *           Projected number of top slot impressions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Simulation::initOnce();
        parent::__construct($data);
    }

    /**
     * The simulated bid modifier upon which projected metrics are based.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 1;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getBidModifier()
    {
        return $this->bid_modifier;
    }

    /**
     * Returns the unboxed value from <code>getBidModifier()</code>

     * The simulated bid modifier upon which projected metrics are based.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 1;</code>
     * @return float|null
     */
    public function getBidModifierValue()
    {
        $wrapper = $this->getBidModifier();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The simulated bid modifier upon which projected metrics are based.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 1;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setBidModifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->bid_modifier = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * The simulated bid modifier upon which projected metrics are based.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 1;</code>
     * @param float|null $var
     * @return $this
     */
    public function setBidModifierValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\DoubleValue(['value' => $var]);
        return $this->setBidModifier($wrappedVar);
    }

    /**
     * Projected number of biddable conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue biddable_conversions = 2;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getBiddableConversions()
    {
        return $this->biddable_conversions;
    }

    /**
     * Returns the unboxed value from <code>getBiddableConversions()</code>

     * Projected number of biddable conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue biddable_conversions = 2;</code>
     * @return float|null
     */
    public function getBiddableConversionsValue()
    {
        $wrapper = $this->getBiddableConversions();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Projected number of biddable conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue biddable_conversions = 2;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setBiddableConversions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->biddable_conversions = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Projected number of biddable conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue biddable_conversions = 2;</code>
     * @param float|null $var
     * @return $this
     */
    public function setBiddableConversionsValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\DoubleValue(['value' => $var]);
        return $this->setBiddableConversions($wrappedVar);
    }

    /**
     * Projected total value of biddable conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue biddable_conversions_value = 3;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getBiddableConversionsValue()
    {
        return $this->biddable_conversions_value;
    }

    /**
     * Returns the unboxed value from <code>getBiddableConversionsValue()</code>

     * Projected total value of biddable conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue biddable_conversions_value = 3;</code>
     * @return float|null
     */
    public function getBiddableConversionsValueValue()
    {
        $wrapper = $this->getBiddableConversionsValue();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Projected total value of biddable conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue biddable_conversions_value = 3;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setBiddableConversionsValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->biddable_conversions_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Projected total value of biddable conversions.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue biddable_conversions_value = 3;</code>
     * @param float|null $var
     * @return $this
     */
    public function setBiddableConversionsValueValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\DoubleValue(['value' => $var]);
        return $this->setBiddableConversionsValue($wrappedVar);
    }

    /**
     * Projected number of clicks.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value clicks = 4;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Returns the unboxed value from <code>getClicks()</code>

     * Projected number of clicks.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value clicks = 4;</code>
     * @return int|string|null
     */
    public function getClicksValue()
    {
        $wrapper = $this->getClicks();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Projected number of clicks.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value clicks = 4;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setClicks($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->clicks = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Projected number of clicks.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value clicks = 4;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setClicksValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setClicks($wrappedVar);
    }

    /**
     * Projected cost in micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 5;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCostMicros()
    {
        return $this->cost_micros;
    }

    /**
     * Returns the unboxed value from <code>getCostMicros()</code>

     * Projected cost in micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 5;</code>
     * @return int|string|null
     */
    public function getCostMicrosValue()
    {
        $wrapper = $this->getCostMicros();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Projected cost in micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 5;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCostMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cost_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Projected cost in micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 5;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCostMicrosValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setCostMicros($wrappedVar);
    }

    /**
     * Projected number of impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value impressions = 6;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * Returns the unboxed value from <code>getImpressions()</code>

     * Projected number of impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value impressions = 6;</code>
     * @return int|string|null
     */
    public function getImpressionsValue()
    {
        $wrapper = $this->getImpressions();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Projected number of impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value impressions = 6;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setImpressions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->impressions = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Projected number of impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value impressions = 6;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setImpressionsValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setImpressions($wrappedVar);
    }

    /**
     * Projected number of top slot impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value top_slot_impressions = 7;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getTopSlotImpressions()
    {
        return $this->top_slot_impressions;
    }

    /**
     * Returns the unboxed value from <code>getTopSlotImpressions()</code>

     * Projected number of top slot impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value top_slot_impressions = 7;</code>
     * @return int|string|null
     */
    public function getTopSlotImpressionsValue()
    {
        $wrapper = $this->getTopSlotImpressions();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Projected number of top slot impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value top_slot_impressions = 7;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setTopSlotImpressions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->top_slot_impressions = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Projected number of top slot impressions.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value top_slot_impressions = 7;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setTopSlotImpressionsValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setTopSlotImpressions($wrappedVar);
    }

}

