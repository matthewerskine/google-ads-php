<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/click_location.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Location criteria associated with a click.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.ClickLocation</code>
 */
class ClickLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     */
    private $city = null;
    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     */
    private $country = null;
    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     */
    private $metro = null;
    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     */
    private $most_specific = null;
    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     */
    private $region = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $city
     *           The city location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $country
     *           The country location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $metro
     *           The metro location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $most_specific
     *           The most specific location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $region
     *           The region location criterion associated with the impression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\ClickLocation::initOnce();
        parent::__construct($data);
    }

    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Returns the unboxed value from <code>getCity()</code>

     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     * @return string|null
     */
    public function getCityValue()
    {
        $wrapper = $this->getCity();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->city = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCityValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCity($wrappedVar);
    }

    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Returns the unboxed value from <code>getCountry()</code>

     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     * @return string|null
     */
    public function getCountryValue()
    {
        $wrapper = $this->getCountry();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCountryValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCountry($wrappedVar);
    }

    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * Returns the unboxed value from <code>getMetro()</code>

     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     * @return string|null
     */
    public function getMetroValue()
    {
        $wrapper = $this->getMetro();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMetro($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->metro = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setMetroValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setMetro($wrappedVar);
    }

    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMostSpecific()
    {
        return $this->most_specific;
    }

    /**
     * Returns the unboxed value from <code>getMostSpecific()</code>

     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     * @return string|null
     */
    public function getMostSpecificValue()
    {
        $wrapper = $this->getMostSpecific();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMostSpecific($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->most_specific = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setMostSpecificValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setMostSpecific($wrappedVar);
    }

    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Returns the unboxed value from <code>getRegion()</code>

     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     * @return string|null
     */
    public function getRegionValue()
    {
        $wrapper = $this->getRegion();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->region = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setRegionValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setRegion($wrappedVar);
    }

}

