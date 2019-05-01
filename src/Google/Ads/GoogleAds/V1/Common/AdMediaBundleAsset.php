<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/ad_asset.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A media bundle asset used inside an ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.AdMediaBundleAsset</code>
 */
class AdMediaBundleAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * The Asset resource name of this media bundle.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 1;</code>
     */
    private $asset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $asset
     *           The Asset resource name of this media bundle.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\AdAsset::initOnce();
        parent::__construct($data);
    }

    /**
     * The Asset resource name of this media bundle.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Returns the unboxed value from <code>getAsset()</code>

     * The Asset resource name of this media bundle.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 1;</code>
     * @return string|null
     */
    public function getAssetValue()
    {
        $wrapper = $this->getAsset();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The Asset resource name of this media bundle.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->asset = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Asset resource name of this media bundle.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAssetValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setAsset($wrappedVar);
    }

}

